<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.devs.list')
            ->with(['developers' => User::role('developer')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.devs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:users'],
            'license_number' => ['required', 'integer', 'min:1'],
            'description' => ['required', 'string', 'max:1024'],
            'imageFile' => ['required', 'mimes:jpeg,png,bmp', 'max:1024'],
        ];

        $messages = [
            'required' => 'الحقل :attribute مطلوب.',
            'integer' => 'الحقل :attribute يجب أن يكون عددًا صحيحًا.',
            'string' => 'الحقل :attribute يجب أن يكون نصًا.',
            'gt:0' => 'الحقل :attribute يجب أن يكون عددًا موجبًا.',
            'max' => 'الحقل :attribute يجب أن يكون حجم الملف أقل من :max كيلوبايت.',
            'unique' => ':attribute مستخدم، يرجى اختيار قيمة أخرى.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        DB::transaction(function () use ($request) {
            $imageName = 'dev_' . time() . '.' . $request->imageFile->extension();

            $request->imageFile->storeAs('developers', $imageName);

            $developer = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'license_number' => $request->license_number,
                'description' => $request->description,
                'image' => $imageName,
                'password' => Hash::make('password'),
            ]);

            $role = Role::findByName('developer');
            $developer->assignRole($role);

        });

        return redirect()->route('admin.devs.list');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('dev-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile($id)
    {
        return view('dev-profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $developer = User::find($id);

        if (!$developer) {
            return back()->withErrors(['msg' => 'المطور غير موجود']);
        }

        return view('admin.devs.show')->with(['developer' => $developer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $developer = User::find($id);

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:users,email,' . $developer->id],
            'license_number' => ['required', 'integer', 'min:1'],
            'description' => ['required', 'string', 'max:1024'],
        ];


        $messages = [
            'required' => 'الحقل :attribute مطلوب.',
            'integer' => 'الحقل :attribute يجب أن يكون عددًا صحيحًا.',
            'string' => 'الحقل :attribute يجب أن يكون نصًا.',
            'gt:0' => 'الحقل :attribute يجب أن يكون عددًا موجبًا.',
            'unique' => ':attribute مستخدم، يرجى اختيار قيمة أخرى.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        // Update the developer's data here
        $developer->name = $request->input('name');
        $developer->license_number = $request->input('license_number');
        $developer->description = $request->input('description');

        // Check if a new image is provided and update it if needed
        if ($request->hasFile('imageFile')) {
            // Store the new image, and update the database record
            $newImage = $request->file('imageFile')->store('public/developers');

            // Remove the old image
            if ($developer->image) {
                Storage::delete('public/developers/' . $developer->image);
            }

            $developer->image = basename($newImage);
        }

        // Check uniqueness of email, excluding the current record
        $developer->email = $request->input('email');

        $developer->save();

        // Redirect or return a response
        return redirect()->route('admin.devs.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developer = User::find($id);

        if (!$developer) {
            return response()->json(['error' => 'المطور غير موجود.'], 404);
        }

        User::destroy($id);
        $pathToFile = public_path('' . $developer->image);

        if (file_exists($pathToFile)) {
            unlink($pathToFile);
        }

        return response()->json(['OK' => 'Deleted. ' . $id], 200);
    }
}
