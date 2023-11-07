@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-prods.css') }}">
@endsection

@section('page-title')
    قائمة المنتجات
@endsection

@section('breadcrumb')
    <a href="#" class="me-2 ms-2 breadcrumb-link-active">المنتجات</a>
@endsection

@section('content')
    <!-- Section 2 -->
    <div style="padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette text-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form name="f1" method="POST" enctype="multipart/form-data" action="">
                                <div class="modal-body">
                                    <div class="row form-row">
                                        <div class="col-md-3">
                                            <label for="neighborhood" class="form-label">الحي</label>
                                            <input type="text" class="form-control" id="neighborhood"
                                                   placeholder="مثال: السليمانية" name="neighborhood" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="rooms" class="form-label">عدد الغرف</label>
                                            <input style="direction: rtl; text-align: right;" type="number" min="1"
                                                   class="form-control" id="rooms" placeholder="مثال: 5" name="rooms"
                                                   required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="product-type" class="form-label">المنتج</label>
                                            <select class="form-select" id="product-type" name="product-type">
                                                <option>الكل</option>
                                                <option>شقق للإيجار</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 align-self-end">
                                            <button type="submit" class="custom-button2-solid">بحث</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section 3 -->
    <div style="padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-success position-absolute project-badge">جاري</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المشروع 1</h5>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً
                                        نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-primary position-absolute project-badge">New</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المشروع 1</h5>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً
                                        نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-primary position-absolute project-badge">New</span>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('product', ['id' => 5]) }}">
                                        <h5 class="card-title mb-4">المشروع 1</h5>
                                    </a>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً
                                        نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
