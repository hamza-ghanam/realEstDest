@extends('layouts.admin')

@section('page-title')
    قائمة المنتجات
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="breadcrumb-item">Articles list</li>
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
                    <h3>قائمة المنتجات</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>الوصف</th>
                            <th>السعر</th>
                            <th>الفئة</th>
                            <th>الحالة</th>
                            <th>المطوّر</th>
                            <th>تاريخ الإضافة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td>
                                    {{ $product->title }}
                                </td>
                                <td>
                                    {{ $product->description }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    {{ $product->catrgory->name }}
                                </td>
                                <td>
                                    {{ $product->status->name }}
                                </td>
                                <td>
                                    {{ $product->developer->name }}
                                </td>
                                <td>
                                    {{ $product->created_at }}
                                </td>
                                <td>

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

        async function deleteTicket(id) {
            if (confirm('Are you sure?')) {
                const token = '{{ csrf_token() }}';
                try {
                    let response = await fetch('/tickets/delete/' + id, {
                        method: 'DELETE',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-Token': token,
                        },
                    });

                    response = await response.json();

                    if (response.error) {
                        alert(response.error);
                        console.log(response);
                    } else if (response.OK) {
                        location.reload();
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        }
    </script>
@endsection
