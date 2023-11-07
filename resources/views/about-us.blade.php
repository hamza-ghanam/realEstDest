@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-prod.css') }}">
@endsection

@section('page-title')
    من نحن؟
@endsection

@section('breadcrumb')
    <span class="ms-2 breadcrumb-link-active">من نحن</span>
@endsection

@section('content')
    <!-- Section 2-->
    <div
        style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(219,250,255,1) 100%); padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing" id="who-r-us">
            <div class="row featurette">
                <div class="col-md-7 order-md-2 d-flex align-items-center justify-content-center">
                    <div class="text-right"> <!-- Added a text-center container -->
                        <h5>
                            نبذة عن الشركة
                        </h5>
                        <h1 class="featurette-heading fw-normal lh-1">
                            نبذة عن وجهتنا العقارية
                        </h1>
                        <br/>
                        <p class="lead p-3">
                            الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه
                            مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع
                            افنا، نسىع لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة
                            وأمان
                        </p>
                        <p class="lead p-3">
                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                            إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
                            هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي
                            وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 order-md-1 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('visitorplugins/images/logo-p.png') }}"
                         class="featurette-image img-fluid mx-auto img-responsive">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div style="padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-6 pe-3 ps-3 mb-5">
                    <div class="custom-border p-3">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <i class="we-icon fa-regular fa-eye"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>رؤيتنا</h4>
                                <p class="lead pe-3">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز على
                                    الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-3 pe-3">
                    <div class="custom-border p-3">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <i class="we-icon fa-regular fa-envelope"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>رسالتنا</h4>
                                <p class="lead pe-3">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز على
                                    الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row featurette mt-5">
                <div class="col-md-6 pe-3 ps-3 mb-5">
                    <div class="custom-border p-3">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <i class="we-icon fa-solid fa-bullseye"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>هدفنا</h4>
                                <p class="lead pe-3">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز على
                                    الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-3 pe-3">
                    <div class="custom-border p-3">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <i class="we-icon fa-solid fa-list-check"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>مهمتنا</h4>
                                <p class="lead pe-3">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                    التركيز على
                                    الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4 -->
    <div style="padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette mb-4">
                <div class="col-md-12 text-center">
                    <h5>قيم الشركه</h5>
                    <h1 class="featurette-heading fw-normal lh-1">تعرف على قيمنا</h1>
                </div>
            </div>
            <div class="row featurette">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme mb-2 justify-content-center text-center">
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/etmam-logo.png') }}" class="img-fluid img-contained" alt="1"/>

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/baladi-logo.png') }}" class="img-fluid img-contained" alt="2"/>

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/invest-logo.png') }}" class="img-fluid img-contained" alt="3"/>

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/mot-logo.png') }}" class="img-fluid img-contained" alt="4"/>

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/sakani-logo.png') }}" class="img-fluid img-contained" alt="5"/>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
