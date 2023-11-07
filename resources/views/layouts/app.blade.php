<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style-prod.css') }}"/>
    <link rel="stylesheet" href="{{ asset('visitorplugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitorplugins/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitorplugins/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    @yield('styles')
    <title>مرحبا بالعالم!</title>
</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary main-navbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                        <img src="{{ asset('visitorplugins/images/main-logo.svg') }}" alt="Logo" width="47" height="56"
                             class="d-inline-block align-text-top">
                        <h3 class="ms-3 main-title">وجهتنا العقارية</h3>
                    </a>
                    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>


                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 centre">
                        <li class="nav-item main-nav-item {{ strpos(Route::currentRouteName(), 'home') !== false  ? 'active' : ''}}">
                            <a class="nav-link main-nav-link" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item main-nav-item {{ strpos(Route::currentRouteName(), 'about-us') !== false  ? 'active' : ''}}">
                            <a class="nav-link main-nav-link" href="{{ route('about-us') }}">من نحن</a>
                        </li>
                        <li class="nav-item main-nav-item {{ strpos(Route::currentRouteName(), 'our-services') !== false  ? 'active' : ''}}">
                            <a class="nav-link main-nav-link" href="{{ route('home') }}#our-services">الخدمات</a>
                        </li>
                        <li class="nav-item main-nav-item dropdown {{ strpos(Route::currentRouteName(), 'products') !== false  ? 'active' : ''}}">
                            <a class="nav-link main-nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                المنتجات
                            </a>
                            <ul class="dropdown-menu main-ddm">
                                <li><a class="dropdown-item" href="{{ route('products') }}">الكل</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="products.html">شقق</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="products.html">شقق</a></li>
                            </ul>
                        </li>
                        <li class="nav-item main-nav-item {{ strpos(Route::currentRouteName(), 'contact-us') !== false  ? 'active' : ''}}">
                            <a class="nav-link main-nav-link main-nav-link" href="#contact-us">اتصل بنا</a>
                        </li>
                    </ul>
                    <button class="custom-button" data-bs-toggle="modal" data-bs-target="#myModal">
                        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Section 2-->
        <div class="jumbotron">
            <div class="jumbotron-content">
                <h1 class="page-title mb-4">@yield('page-title')</h1>
                <div class="row featurette text-center">
                    <div class="col-md-12 text-center mb-4">
                        <a href="{{ route('home') }}" class="me-2 breadcrumb-link">الرئيسية</a>/
                        @yield('breadcrumb')
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- Footer -->
        <div style="background-color: #0A265A;, rgba(219,250,255,1) 100%); padding-top: 5%; padding-bottom: 5%;" id="contact-us">
            <div class="container">
                <div class="row featurette mb-4 text-center">
                    <div class="col-md-4">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="{{ asset('visitorplugins/images/main-logo.svg') }}" alt="Logo" width="47" height="56"
                                 class="d-inline-block align-text-top">
                            <h3 class="ms-3 main-title">وجهتنا العقارية</h3>
                        </a>
                        <p class="lead footer-p">
                            الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه مجرد
                            ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع افنا، نسىع
                            لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة وأمان
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h3 class="featurette-heading footer-h3 mb-3">خريطة الموقع</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group text-right footer-ul">
                                    <li class="list-group-item border-0 footer-li">
                                        <a href="index.html">الرئيسية</a>
                                    </li>
                                    <li class="list-group-item border-0 footer-li">
                                        <a href="index.html#who-r-us">من نحن</a>
                                    </li>
                                    <li class="list-group-item border-0 footer-li">
                                        <a href="index.html#our-services">خدماتنا</a>
                                    </li>
                                    <li class="list-group-item border-0 footer-li">
                                        <a href="#">منتجاتنا</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group text-right footer-ul">
                                    <li class="list-group-item border-0 footer-li">
                                        <a href="index.html#contact-us">اتصل بنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h3 class="featurette-heading footer-h3 mb-3">تواصل معنا</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group text-right footer-ul">
                                    <li class="list-group-item border-0 footer-li">
                                        <h6><i class="fa-solid fa-location-dot  me-3"></i>جدة، المملكة العربية السعودية</h6>
                                    </li>
                                    <li class="list-group-item border-0 footer-li">
                                        <i class="fa-solid fa-phone-volume  me-3"></i><a href="tel:+9965366582" dir="ltr">+996
                                            5366582</a>
                                    </li>
                                    <li class="list-group-item border-0 footer-li">
                                        <i class="fa-solid fa-envelope me-3"></i><a href="mailto:info@gmail.com">info@gmail.com</a>
                                    </li>
                                    <li class="list-group-item border-0 footer-li mt-3 social-icons">
                                        <button class="custom-button me-3">
                                            <i class="fa-brands fa-instagram fa-lg"></i>
                                        </button>
                                        <button class="custom-button me-3">
                                            <i class="fa-brands fa-snapchat fa-lg"></i>
                                        </button>
                                        <button class="custom-button me-3">
                                            <i class="fa-brands fa-x-twitter fa-lg"></i>
                                        </button>
                                        <button class="custom-button me-3">
                                            <i class="fa-brands fa-tiktok fa-lg"></i>
                                        </button>
                                        <button class="custom-button me-3">
                                            <i class="fa-brands fa-square-facebook fa-lg"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div style="background-color: #ffffff; padding-top: .7%; padding-bottom: .7%;">
            <div class="container">
                <div class="row featurette text-center">
                    <div class="col-md-12 mb-0 py-0">
                        <h6>&copy; جميع الحقوق محفوظة لصالح شركة جهات للتطوير العقاري 2023</h6>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="loading-overlay">
        <img src="{{ asset('visitorplugins/images/loading1.gif') }}" alt="Loading..."/>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">البحث</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset>
                            <div class="form-group">
                                <label for="search_word" class="form-label mt-4">أدخل عبارة البحث أدناه</label>
                                <input type="text" class="form-control" id="search_word" name="search_word"
                                       placeholder="مثال: شقة في السليمانية">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="custom-button2-solid secondary-custom">إرسال</button>
                    <button type="button" class="custom-button2" data-bs-dismiss="modal" style="color: #696969;">إلغاء
                        الأمر
                    </button>
                </div>
            </div>
        </div>
    </div>
    @yield('modals')
</div>
<!-- Include jQuery from a CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('visitorplugins/owlcarousel/dist/owl.carousel.min.js') }}"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="{{ asset('visitorplugins/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('visitorplugins/js/script.js') }}"></script>

@yield('scripts')
</body>
</html>



