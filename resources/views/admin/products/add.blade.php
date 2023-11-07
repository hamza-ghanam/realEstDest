@extends('layouts.admin')

@section('page-title')
    إضافة منتج جديد
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.products.list') }}">المنتجات</a></li>
    <li class="breadcrumb-item">إضافة منتج جديد</li>
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
                    <h3>إضافة منتج جديد</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                    </div>
                    <form action="" method="POST">
                        <fieldset>
                            <legend>البيانات الرئيسية</legend>
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-1 col-form-label">الاسم</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="name" name="name"/>
                                </div>
                                <label for="category" class="col-sm-1 col-form-label">الفئة</label>
                                <div class="col-sm-3">
                                    <select class="form-select" id="category" name="category">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <label for="status" class="col-sm-1 col-form-label">الحالة</label>
                                <div class="col-sm-3">
                                    <select class="form-select" id="status" name="status">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="developer" class="col-sm-1 col-form-label">المطوّر</label>
                                <div class="col-sm-5">
                                    <select class="form-select" id="developer" name="developer">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <label for="price" class="col-sm-1 col-form-label">السعر</label>
                                <div class="col-sm-5">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="price" name="price"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-1 col-form-label">التوصيف</label>
                                <div class="col-sm-11">
                                    <textarea id="description" name="description" class="form-control" rows="2" cols="20"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend>المميزات والضمانات</legend>
                            <div id="all_features">
                                <div class="form-group row">
                                    <label for="features_1" class="col-sm-1 col-form-label">العنوان</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="features_1" name="features[]"/>
                                    </div>
                                    <label for="features_icons_1" class="col-sm-1 col-form-label">الأيقونة</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="features_icons_1" name="features_icons[]"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend>تفاصيل المشروع</legend>
                            <div id="all_details">
                                <div class="form-group row">
                                    <label for="details_1" class="col-sm-1 col-form-label">العنوان</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="details_1" name="details[]"/>
                                    </div>
                                    <label for="details_icons_1" class="col-sm-1 col-form-label">الأيقونة</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="details_icons_1" name="details_icons[]"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend>نماذج المشروع</legend>
                            <div id="specimens">
                                <div class="form-group row">
                                    <label for="specimens_1" class="col-sm-1 col-form-label">العنوان</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="specimens_1" name="specimens[]"/>
                                    </div>
                                    <label for="specimens_drawings_1" class="col-sm-1 col-form-label">الأيقونة</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="specimens_drawings_1" name="specimens_drawings[]"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend>الصور والفيديو</legend>
                            <div id="specimens">
                                <div class="form-group row">
                                    <label for="specimens_drawings_1" class="col-sm-1 col-form-label">الأيقونة</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="specimens_drawings_1" name="specimens_drawings[]"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
