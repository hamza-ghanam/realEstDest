@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-dev.css') }}">
@endsection

@section('page-title')
    مشروعات المطور
@endsection

@section('breadcrumb')
    <span class="ms-2 breadcrumb-link-active">مشروعات المطور</span>
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
                                <div class="col-md-2 justify-content-center text-center">
                                    <img src="{{ asset('visitorplugins/images/dev-placeholder.jpg') }}" alt="dev-name" class="rounded-circle mb-3" style="width: 120px;">
                                    <h5>شركة كيان للتطوير العقاري</h5>
                                </div>
                                <div class="col-md-10 dev-bio">
                                    <h2>نبذة عن المطور</h2>
                                    <p class="lead mt-3">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص.
                                    </p>
                                    <button type="button" onclick="location.href='#contact-us'" class="custom-button2-solid me-3 mt-3">
                                        <i class="fa-solid fa-phone-volume  me-2"></i> اتصل بنا
                                    </button>
                                    <button type="button" class="custom-button2" data-bs-toggle="modal" data-bs-target="#myModalContact">
                                        سجل اهتمامك
                                    </button>
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
    <!-- Section 3 -->
    <div style="padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette mb-4">
                <div class="col-md-12 text-center">
                    <h5>منتجات المطور</h5>
                    <h1 class="featurette-heading fw-normal lh-1">تعرف على منتجاتي</h1>
                </div>
            </div>
            <div class="row featurette text-center mt-4 pt-4">
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
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
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
                                    <p class="card-text">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
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
