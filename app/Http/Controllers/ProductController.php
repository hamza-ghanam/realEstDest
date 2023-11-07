<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Icon;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::paginate(25);

        return view('admin.products.list')->with(['products' => $products]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function visitorIndex()
    {
        return view('products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.products.add')
            ->with([
                'categories' => Category::all(),
                'developers' => User::role('developer')->get(),
                'statuses' => Status::all(),
                'icons' => Icon::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function visitorShow($id)
    {
        return view('product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generateCertificate($studentId)
    {
        $student = User::find($studentId);

        if (!$student) {
            dd('Not found');
        }

        $data = [
            'student' => $student,
        ];

        $pdf = Pdf::loadView('admin.certificate', $data)->setPaper('A4', 'landscape');
        //return $pdf->stream('certificate.pdf');

        // To save the PDF
        //$pdf->save('storage/'. $student->id . '_' . Carbon::now()->getTimestampMs() . '.pdf')->setPaper('A4', 'landscape');
        return $pdf->stream('storage/' . $student->id . '_' . Carbon::now()->getTimestampMs() . '.pdf');

        // To return the PDF as a response
        //return $pdf->stream('certificate.pdf');
    }
}
