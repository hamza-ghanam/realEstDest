@extends('layouts.admin')

@section('page-title')
    قائمة المطورين
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">الرئيسية</a></li>
    <li class="breadcrumb-item">قائمة المطورين</li>
@endsection

@section('content')
    <!-- Info boxes -->
    <div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    </div>
    <!-- /.row -->

    @if ($errors->any())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>قائمة المطورين</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الشعار (الصورة)</th>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الرخصة</th>
                            <th>الوصف</th>
                            <th>تاريخ التسجيل</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody style="font-weight: 400;">
                        @foreach($developers as $key => $developer)
                            <tr>
                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('admin.devs.edit', [$developer->id]) }}">
                                        <img src="{{ asset('storage/developers/' . $developer->image)  }}"
                                             alt="{{ $developer->name }}" class="img-thumbnail" width="75"/>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.devs.edit', ['id' => $developer->id]) }}">
                                        {{ $developer->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="mailto:{{ $developer->email }}">{{ $developer->email }}</a>
                                </td>
                                <td>
                                    {{ $developer->license_number }}
                                </td>
                                <td>
                                    {{ $developer->description }}
                                </td>
                                <td>
                                    {{ date("d-m-Y H:i:s", strtotime($developer->created_at)) }}
                                </td>
                                <td>
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item dropdown" style="line-height: 1;">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                                خيارات <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" tabindex="-1"
                                                   href="{{ route('admin.devs.edit', [$developer->id]) }}"><i
                                                        class="fas fa-info-circle"></i> تحرير</a>
                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item" tabindex="-1" href="#"
                                                   onclick="deleteDeveloper({{$developer->id}})" style="color: red;">
                                                    <i class="fas fa-trash"></i> حذف
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('script')

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminplugins/select2/js/select2.full.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('adminplugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        function getParams(url, formId) {
            console.log(formId);
            const form = document.getElementById(formId);
            const formData = new FormData(form);

            let i = 0;
            for (var pair of formData.entries()) {
                if (pair[0] === '_token') {
                    continue;
                }

                if (pair[1] !== '') {
                    if (i == 0) {
                        url += '?' + pair[0] + '=' + pair[1];
                    } else {
                        url += '&' + pair[0] + '=' + pair[1];
                    }
                    i++;
                }
            }

            return url;
        }

        $(function () {
            $("#ok-id").on('click', () => {
                const url = getParams('/tickets/all/', 'form-id');
                location.href = url;
            });

            $("#ok-filter").on('click', () => {
                const url = getParams('/tickets/all/', 'filter-form');
                location.href = url;
            });

            $("#flip").click(function () {
                $("#filter-form").slideToggle("slow");
                const element = document.getElementById('angle1');
                const style = element.getAttribute('class');
                const attr = style === 'fas fa-angle-down' ? 'fas fa-angle-up' : 'fas fa-angle-down';
                element.setAttribute('class', attr);
            });

            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 15,
                "order": [
                    [0, "desc"]
                ]
            });
        });

        const Toast = Swal.mixin({
            toast: true,
            background: '#E3E5E8',
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        });

        async function deleteDeveloper(id) {
            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: "لا يمكنك التراجع عن هذا!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم، حذف!',
                cancelButtonText: 'إلغاء الأمر'
            }).then(async (result) => {
                if (result.value) {
                    const token = '{{ csrf_token() }}';

                    try {
                        Swal.fire({
                            title: 'يرجى الانتظار!',
                            imageUrl: '{{ asset('dist/img/loading2.gif') }}',
                            imageWidth: 128,
                            imageHeight: 128,
                            imageAlt: 'يتم الحذف..',
                            showConfirmButton: false,
                        });


                        let resp = await axios.delete('/admin/devs/delete/' + id, {
                            withCredentials: true,
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-Token': token,
                            }
                        });

                        let result = resp.data;

                        Swal.close();

                        if (result.OK) {
                            Toast.fire({
                                type: 'success',
                                title: 'تم الحذف!',
                                text: 'تم حذف المطور المحدد بنجاح.',
                            });

                            location.reload();
                        }
                    } catch (e) {
                        console.log(e.response);
                        let errors = '';
                        Object.keys(e.response?.data).forEach(valInd => {
                            errors += (e.response?.data[valInd] + '\n');
                        });

                        Toast.fire({
                            type: 'warning',
                            title: errors,
                        });
                    }
                }
            });
        }
    </script>
@endsection
