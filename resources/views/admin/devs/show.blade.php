@extends('layouts.admin')

@section('page-title')
    عرض/تحرير بيانات مطوّر
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.devs.list') }}">المطورون</a></li>
    <li class="breadcrumb-item">عرض/تحرير بيانات مطوّر</li>
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
                    <h3>عرض/تحرير بيانات مطوّر</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.devs.update', ['id' => $developer->id]) }}" method="POST"
                          enctype="multipart/form-data" name="devAddForm">
                        <fieldset>
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-1 col-form-label">الاسم</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{ $developer->name }}" required=""/>
                                </div>
                                <label for="email" class="col-sm-1 col-form-label">البريد الإلكتروني</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="{{ $developer->email }}" required=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="license_number" class="col-sm-1 col-form-label">رقم الرخصة</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="license_number" name="license_number"
                                           value="{{ $developer->license_number }}" required=""/>
                                </div>
                                <label for="image" class="col-sm-1 col-form-label">الشعار (الصورة)</label>
                                <div class="col-sm-1">
                                    <img src="{{ asset('storage/developers/' . $developer->image)  }}"
                                         alt="{{ $developer->name }}" class="img-thumbnail" width="100"/>
                                </div>
                                <div class="col-sm-4">
                                    <input type="file"
                                           name="imageFile"
                                           id="image"
                                           class="form-control @error('articleFile') is-invalid @enderror"/>
                                    <small>الحجم الأعظمي 1 ميغابايت. الصيغ المقبولة: jpeg,png,bmp</small>
                                    @error('myFile')
                                    <br/>
                                    <span class="invalid-feedback" style="color: red;"
                                          role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label for="description" class="col-sm-1 col-form-label">التوصيف</label>
                                <div class="col-sm-11">
                                    <textarea id="description" name="description" class="form-control" rows="2"
                                              cols="20">{{ $developer->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary"
                                       type="submit" name="submit"
                                       value="موافق"/>
                                <a class="btn btn-warning ml-3" href="{{ route('admin.devs.list') }}">
                                    إلغاء الأمر
                                </a>
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
