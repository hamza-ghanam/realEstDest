@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-prod.css') }}">
@endsection

@section('page-title')
    اسم المشروع هنا
@endsection

@section('breadcrumb')
    <a href="{{ route('products') }}" class="me-2 ms-2 breadcrumb-link">المنتجات</a>/
    <span class="ms-2 breadcrumb-link-active">اسم المشروع</span>
@endsection

@section('content')
    <!-- Section 2 -->
    <div style="padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-12">
                    <div class="card pt-4 pb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7 dev-bio">
                                    <h2>نبذة تعريفية : فضلاً قُم بوضع اسم المشروع هنا بشكل تفصيلي </h2>
                                    <p class="lead mt-3">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                        التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك
                                        يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف
                                        عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي
                                        الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب
                                        تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص.
                                    </p>
                                    <button type="button" onclick="location.href='#contact-us'" class="custom-button2-solid me-3 mt-3">
                                        <i class="fa-solid fa-phone-volume  me-2"></i> اتصل بنا
                                    </button>
                                    <button type="button" class="custom-button2" data-bs-toggle="modal" data-bs-target="#myModalContact">
                                        سجل اهتمامك
                                    </button>
                                </div>
                                <div class="col-md-5 justify-content-center text-center mt-5">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div id="imageDiv">
                                                <img id="mainImage" class="img-fluid" src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" alt="Main Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-center justify-content-center">
                                        <div class="col-md-12">
                                            <div id="thumbnailContainer">
                                                <img class="thumbnail" src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" alt="Thumbnail 1">
                                                <img class="thumbnail" src="{{ asset('visitorplugins/images/db97c0e977dd8bfdf277eafb07e29e15.jpeg') }}" alt="Thumbnail 2">
                                                <img class="thumbnail" src="{{ asset('visitorplugins/images/slider-1.jpeg') }}" alt="Thumbnail 3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section  2-->

    <!-- Section 3 -->
    <div style="padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-12">
                    <div class="card pb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 dev-bio justify-content-center text-center">
                                    <button class="custom-button2-solid me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house 2.svg') }}" class="me-2"/> نموذج A
                                    </button>
                                    <button class="custom-button2 me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house3.svg') }}" class="me-2"/> نموذج B
                                    </button>
                                    <button class="custom-button2 me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house3.svg') }}" class="me-2"/> نموذج C
                                    </button>
                                    <button class="custom-button2 me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house3.svg') }}" class="me-2"/> نموذج D
                                    </button>
                                    <button class="custom-button2 me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house3.svg') }}" class="me-2"/> نموذج E
                                    </button>
                                    <button class="custom-button2 me-3 mt-3">
                                        <img src="{{ asset('visitorplugins/images/modern-house3.svg') }}" class="me-2"/> نموذج F
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-4 pt-4">
                                <div class="col-md-6 mb-4 ps-5">
                                    <h3>المميزات والضمانات </h3>

                                    <div class="row mb-4 mt-5">
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/space-feature.svg') }}" alt=""/> مساحات مختلفه
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/parking-features.svg') }}" alt=""/> تصميم عصري
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/space-feature.svg') }}" alt=""/> مساحات مختلفه
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/parking-features.svg') }}" alt=""/> تصميم عصري
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/space-feature.svg') }}" alt=""/> مساحات مختلفه
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/parking-features.svg') }}" alt=""/> تصميم عصري
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/space-feature.svg') }}" alt=""/> مساحات مختلفه
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/parking-features.svg') }}" alt=""/> تصميم عصري
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-start" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    <img class="me-3" src="{{ asset('visitorplugins/images/space-feature.svg') }}" alt=""/> مساحات مختلفه
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="toast d-flex align-items-center justify-content-center price-toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    السعر : 695,000 ريـــــال
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-5 mt-4">
                                    <div class="border-div text-center">
                                        <h4 class="title">كروكي</h4>
                                        <img class="mt-5 mb-5 img-fluid" src="{{ asset('visitorplugins/images/scketch-chart.png') }}" alt="scketch">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section  3 -->

    <!-- Section 4 -->
    <div style="padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-12">
                    <div class="card pb-4">
                        <div class="card-body">
                            <div class="row mt-4 pt-4">
                                <div class="col-md-6 mb-4 ps-5">
                                    <h3>تفاصيل المشروع </h3>

                                    <ul class="list-group text-right details-ul mt-5">
                                        <li class="list-group-item border-0">
                                            <i class="fa-solid fa-certificate details-fa"></i>
                                            ترخيص إعلان: <span>123456789</span>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <i class="fa-solid fa-house details-fa"></i>
                                            عدد الشقق المتاحة داخل الوحدة: <span>5</span>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <i class="fa-solid fa-hotel details-fa"></i>
                                            عدد الغرف: <span>6</span>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <i class="fa-solid fa-location-dot details-fa"></i>
                                            جدّة، المملكة العربية السعودية
                                        </li>
                                        <li class="list-group-item border-0">
                                            <i class="fa-solid fa-square-parking details-fa"></i>
                                            موقف خاص
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-md-6 ps-5 mt-4">
                                    <div class="border-div text-center">
                                        <h4 class="title title2">معرض الصور والفيديو</h4>
                                        <div class="row text-center mt-5 mb-5">
                                            <div class="col-md-12">
                                                <div id="imageDiv2">
                                                    <img id="mainImage2" class="img-fluid" src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" alt="Main Image">
                                                    <br/>
                                                    <div id="thumbnailContainer2">
                                                        <img class="thumbnail2" src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" alt="Thumbnail 1">
                                                        <img class="thumbnail2" src="{{ asset('visitorplugins/images/db97c0e977dd8bfdf277eafb07e29e15.jpeg') }}" alt="Thumbnail 2">
                                                        <img class="thumbnail2" src="{{ asset('visitorplugins/images/slider-1.jpeg') }}" alt="Thumbnail 3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section  4 -->

    <!-- Section 5 -->
    <div style="padding-bottom: 5%;" class="mt-5">
        <div class="container marketing">
            <div class="row featurette mb-3">
                <div class="col-md-12 text-center">
                    <h5>منتجات مشابهة</h5>
                    <h1 class="featurette-heading fw-normal lh-1">منتجات ذات صلة</h1>
                </div>
            </div>
            <div class="row featurette text-center mt-3 pt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpeg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-success position-absolute project-badge">جاري</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المشروع 1</h5>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpeg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-primary position-absolute project-badge">New</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المشروع 1</h5>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card position-relative">
                                <div class="image-wrapper">
                                    <img src="{{ asset('visitorplugins/images/slider-1.jpeg') }}" alt="...">
                                    <!-- Add a badge -->
                                    <span class="badge bg-primary position-absolute project-badge">New</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المشروع 1</h5>
                                    <h6 class="mb-4">شوية تفاصيل</h6>
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                                    <button class="custom-button2-solid">اعرف المزيد</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section 6-->

@endsection

@section('modals')
    <!-- The Modal -->
    <div class="modal fade" id="myModalContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">سجل اهتمامك بالمشروع</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset>
                            <div class="form-group">
                                <label for="staticEmail" class="form-label mt-4">الاسم</label>
                                <input type="text" class="form-control" id="staticEmail" name="guest_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label mt-4">رقم الجوال</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="501234567">
                            </div>
                            <div class="form-group">
                                <label for="notes" class="form-label mt-4">ملاحظات</label>
                                <textarea rows="3" cols="10" class="form-control" id="notes" placeholder="501234567" name="notes"></textarea>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="custom-button2-solid">إرسال</button>
                    <button type="button" class="custom-button2" data-bs-dismiss="modal">إلغاء الأمر</button>
                </div>
            </div>
        </div>
    </div>
@endsection
