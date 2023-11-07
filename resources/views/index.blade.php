<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('visitorplugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('visitorplugins/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitorplugins/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('visitorplugins/css/style.css') }}"/>

    <title>مرحبا بالعالم!</title>
</head>
<body>
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
                        <a class="nav-link main-nav-link dropdown-toggle" href="{{ route('products') }}" role="button"
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
    <div id="myCarousel" class="carousel slide slider-carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item slider-carousel-item active">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <div class="slider-carousel-text">
                        <h1 class="slider-carousel-h1">
                            مرحباً بك في وجهتنا<br/>
                            للتطوير العقاري
                        </h1>
                        <br/>
                        <p class="slider-carousel-p mt-2">
                            الاحتياجات العقارايه لعمالئنا. نتفهم أن العقارات ليست ً شامالا ً نحن نعمل بشغف لتقديم حال يه
                            مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع
                            افنا، نسىع لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة
                            وأمان
                        </p>
                        <br/>
                        <button class="custom-button2" onclick="window.location.href = '{{ route('about-us') }}';">تعرف علينا أكثر</button>
                    </div>
                </div>
            </div>

            <div class="carousel-item slider-carousel-item">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <div class="slider-carousel-text">
                        <h1 class="slider-carousel-h1">
                            مرحباً بك في وجهتنا<br/>
                            للتطوير العقاري
                        </h1>
                        <br/>
                        <p class="slider-carousel-p mt-2">
                            الاحتياجات العقارايه لعمالئنا. نتفهم أن العقارات ليست ً شامالا ً نحن نعمل بشغف لتقديم حال يه
                            مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع
                            افنا، نسىع لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة
                            وأمان
                        </p>
                        <br/>
                        <button class="custom-button2">تعرف علينا أكثر</button>

                    </div>
                </div>
            </div>
            <div class="carousel-item slider-carousel-item">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <div class="slider-carousel-text">
                        <h1 class="slider-carousel-h1">
                            مرحباً بك في وجهتنا<br/>
                            للتطوير العقاري
                        </h1>
                        <br/>
                        <p class="slider-carousel-p mt-2">
                            الاحتياجات العقارايه لعمالئنا. نتفهم أن العقارات ليست ً شامالا ً نحن نعمل بشغف لتقديم حال يه
                            مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع
                            افنا، نسىع لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة
                            وأمان
                        </p>
                        <br/>
                        <button class="custom-button2">تعرف علينا أكثر</button>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Section 2-->
    <div style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(219,250,255,1) 100%); padding-top: 5%; padding-bottom: 5%;">
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
                        <p class="lead">
                            الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال يه
                            مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات األفراد والمستثمرين. من خالل خرثتنا رشاء والبيع
                            افنا، نسىع لتوجيه عمالئنا نحو االستثمارات العقارية الذكية وتسهيل عمليات ال واحث ر بكفاءة
                            وأمان
                        </p>
                        <button class="custom-button2-solid">اقرأ المزيد</button>
                    </div>
                </div>
                <div class="col-md-5 order-md-1 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('visitorplugins/images/logo-p.png') }}" class="featurette-image img-fluid mx-auto img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- Section 3-->
    <div style="background: #ffffff; padding-top: 5%; padding-bottom: 5%;" id="our-services">
        <div class="container marketing">
            <div class="row featurette mb-5">
                <div class="col-md-12 text-center">
                    <h5>خدمات الشركة</h5>
                    <h1 class="featurette-heading fw-normal lh-1">تعرف على خدماتنا</h1>
                </div>
            </div>
            <div class="row featurette">
                <div class="col-md-4 spaced-column">
                    <div class="text-center">
                        <img src="{{ asset('visitorplugins/images/Group 69583.svg') }}" alt="Image 1" class="img-fluid mb-4">
                        <h4 class="srv-head">تسويق عقاري</h4>
                        <p class="lead text-center">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن
                            نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                    </div>
                </div>
                <div class="col-md-4 spaced-column">
                    <div class="text-center">
                        <img src="{{ asset('visitorplugins/images/Group 69584.svg') }}" alt="Image 2" class="img-fluid mb-4">
                        <h4 class="srv-head">وساطة عقارية</h4>
                        <p class="lead text-center">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن
                            نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                    </div>
                </div>
                <div class="col-md-4 spaced-column">
                    <div class="text-center">
                        <img src="{{ asset('visitorplugins/images/Group 69585.svg') }}" alt="Image 3" class="img-fluid mb-4">
                        <h4 class="srv-head">إدارة عقارات</h4>
                        <p class="lead text-center">الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن
                            نعمل بشغف لتقديم حال يه مجرد ممتلكات.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 4 -->
    <div style="background: linear-gradient(180deg, rgba(219,250,255,1) 100%, rgba(255,255,255,1) 0%); padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette mb-4">
                <div class="col-md-12 text-center">
                    <h5>منتجات الشركة</h5>
                    <h1 class="featurette-heading fw-normal lh-1">تعرف على منتجاتنا</h1>
                </div>
            </div>
            <div class="row featurette text-center">
                <div class="col-md-12 text-center mb-4">
                    <a href="#" class="me-3 srv-link active">الكل</a>
                    <a href="#" class="me-3 srv-link">شقق للبيع</a>
                    <a href="#" class="me-3 srv-link">شقق للإيجار</a>
                    <a href="#" class="me-3 srv-link">تحت الإنشاء</a>
                </div>
            </div>
            <div class="row featurette text-center">
			<div class="col-md-12">

                    <div class="owl-carousel products-carousel owl-theme mb-2 justify-content-center text-center">
                        <div class="prod-card ms-2 me-2">
							<div class="card img-container1">
                                <img src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" class="img-fluid img-contained1" alt="1" />
                                <div class="card-body">
                                    <h5> Hello World</h5>
                                    My description
                                </div>
                            </div>
                        </div>
                        <div class="prod-card ms-2 me-2">
                            <div class="card img-container1">
                                <img src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" class="img-fluid img-contained1" alt="1" />
                                <div class="card-body">
                                    <h5> Hello World</h5>
                                    My description
                                </div>
                            </div>
                        </div>
                        <div class="prod-card ms-2 me-2">
                            <div class="card img-container1">
                                <img src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" class="img-fluid img-contained1" alt="1" />
                                <div class="card-body">
                                    <h5> Hello World</h5>
                                    My description
                                </div>
                            </div>
                        </div>
                        <div class="prod-card ms-2 me-2">
                            <div class="card img-container1">
                                <img src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" class="img-fluid img-contained1" alt="1" />
                                <div class="card-body">
                                    <h5> Hello World</h5>
                                    My description
                                </div>
                            </div>
                        </div>
                        <div class="prod-card ms-2 me-2">
                            <div class="card img-container1">
                                <img src="{{ asset('visitorplugins/images/d43d43aa999f9372cb8606dae0af5f02.jpeg') }}" class="img-fluid img-contained1" alt="1" />
                                <div class="card-body">
                                    <h5> Hello World</h5>
                                    My description
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
			</div>
        </div>
    </div>
    <!-- Section 5 -->
    <div style="background: #ffffff; padding-top: 5%; padding-bottom: 5%;">
        <div class="container marketing">
            <div class="row featurette mb-4">
                <div class="col-md-12 text-center">
                    <h5>شركاء النجاح</h5>
                    <h1 class="featurette-heading fw-normal lh-1">تعرّف على شركاؤنا</h1>
                </div>
            </div>
            <div class="row featurette text-center">
                <div class="col-md-12 text-center">

                </div>
            </div>
            <div class="row featurette text-center">
				<div class="col-md-12">

                    <div class="owl-carousel values-carousel owl-theme mb-2 justify-content-center text-center">
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/etmam-logo.png') }}" class="img-fluid img-contained" alt="1" />

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/baladi-logo.png') }}" class="img-fluid img-contained" alt="2" />

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/invest-logo.png') }}" class="img-fluid img-contained" alt="3" />

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/mot-logo.png') }}" class="img-fluid img-contained" alt="4" />

                            </div>
                        </div>
                        <div class="ms-2 me-2">
                            <div class="card img-container">
                                <img src="{{ asset('visitorplugins/images/sakani-logo.png') }}" class="img-fluid img-contained" alt="5" />

                            </div>
                        </div>

                    </div>
                </div>
			</div>
        </div>
    </div>
    <!-- Section 6 -->
    <div style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(219,250,255,1) 100%); padding-top: 5%; padding-bottom: 5%;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/timeline-start.svg') }}"
                                 class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/Group 69571.svg') }}" class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            <h5 class="mb-0">الاحترافية والخبرة</h5>
                            <p class="lead mb-0">
                                الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال
                                يه
                                مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/timeline-inbetween.svg') }}"
                                 class="featurette-image img-fluid mx-auto img-responsive" alt="x">
                        </div>
                        <div class="col-md-9">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/Group 69572.svg') }}" class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            <h5 class="mb-0">شفافية ونزاهه</h5>
                            <p class="lead mb-0">
                                الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال
                                يه
                                مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/timeline-inbetween.svg') }}"
                                 class="featurette-image img-fluid mx-auto img-responsive" alt="x">
                        </div>
                        <div class="col-md-9">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/Group 69573.svg') }}" class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            <h5 class="mb-0">توفير الوقت والجهد</h5>
                            <p class="lead mb-0">
                                الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال
                                يه
                                مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/timeline-inbetween.svg') }}"
                                 class="featurette-image img-fluid mx-auto img-responsive" alt="x">
                        </div>
                        <div class="col-md-9">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/Group 69574.svg') }}" class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            <h5 class="mb-0">معرفة محلية واقليمية</h5>
                            <p class="lead mb-0">
                                الحتياجات العقارات لعمالئنا. نتفهم أن العقارات ليست ً شامال ً نحن نعمل بشغف لتقديم حال
                                يه
                                مجرد ممتلكات، بل أماكن تعكس أحالم وتطلعات.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <img src="{{ asset('visitorplugins/images/timeline-end.svg') }}"
                                 class="featurette-image img-fluid mx-auto img-responsive">
                        </div>
                        <div class="col-md-9">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-center"></div>
                <div class="col-md-5 text-center">
                    <!-- Image Section with Dark Layer -->
                    <div class="image-section">
                        <div class="dark-layer"></div>
                        <div class="overlay-text">
                            <img src="{{ asset('visitorplugins/images/logo-vector.svg') }}" alt="Overlay Image" class="img-fluid overlay-image mb-4"/>
                            <h6>لماذا تختارنا؟</h6>
                            <h4>تعرف على مميزات وجهتنا.</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
    <img src="{{ asset('visitorplugins/images/loading1.gif') }}" alt="Loading..." />
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
                            <input type="text" class="form-control" id="search_word" name="search_word" placeholder="مثال: شقة في السليمانية">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="custom-button2-solid">إرسال</button>
                <button type="button" class="custom-button2" data-bs-dismiss="modal" style="color: #696969;">إلغاء الأمر</button>
            </div>
        </div>
    </div>
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

<script>

</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
