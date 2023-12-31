<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title  -->
    <title>RiceFarm | Home</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo tanpa bg.png')}}" type="image/x-icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/lib/bootstrap.min.css" rel="stylesheet">

    <!-- LIB -->
    <link href="assets/lib/animate.css" rel="stylesheet">
    <link href="assets/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/lib/validnavs.css" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css">

</head>

<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>

    <!-- Header -->
    <header>
        <!-- Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">
            <div class="container-full d-flex justify-content-between align-items-center">
                <!-- Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo tanpa bg.png" class="logo" alt="Logo" height="300px">
                    </a>
                </div>
                <!-- Collect the nav links -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav1">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><span class="fi fi-br-home">
                                    Home</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fi fi-bs-book-spells">Penjadwalan</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/addschedulinges">Buat Penjadwalan</a></li>
                                <li><a href="/schedules">Lihat Penjadwalan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fi fi-bs-book-spells">Pencatatan</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/financials">Catat Keuangan</a></li>
                            </ul>
                        </li>
                        <li class="nav1">
                            <a href="/articles" class="dropdown-toggle" data-toggle="dropdown"><span class="fi fi-bs-book-spells">
                                    Artikel</span></a>
                        </li>
                        @guest
                        <!-- Tampilkan tombol Daftar jika pengguna belum login -->
                        <li class="nav1" style="left: 320px;">
                            <a href="/register"><span class="signup-button">Daftar</span></a>
                        </li>
                        @endguest

                        @auth
                            <!-- Tidak menampilkan tombol Daftar jika pengguna sudah login -->
                        @endauth

                        @guest
                            <!-- Tampilkan tombol login jika pengguna belum login -->
                        <li class="nav1" style="left: 300px;">
                            <a href="/login"><span class="login-button">Masuk</span></a>
                        </li>
                        @else
                            <!-- Tombol tidak ditampilkan jika pengguna sudah login -->
                        @endguest

                        @if(auth()->check())
                        <li style="left: 300px;">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="logout-button" style="top: -25px;">
                                <a style="color: white;">Log out</a>
                            </button>                        
                        </form>
                        </li>
                        @endif

                    </ul>
                </div>
                <!-- <div class="container mt-5"> -->
                <div class="navright" style="right: 0; justify-content: end">
                </div>
            </div>
            </div>
            <!-- /.navbar-collapse -->
            <div class="attr-right">
            </div>
            <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- HOME PAGE -->
    <!-- Start Product Features  -->
    <div class="product-feature-style-one-area overflow-hidden default-padding" style="background-color: white;  padding-top: 70px;">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 mb-xs-50 mb-md-120">
                    <div class="product-feature-style-one">
                        <div class="info">
                            <h4 class="sub-title">Rice Farm</h4>
                            <h2 class="title mb-25">Mulai menanam padi<br>dengan membuat penjadwalan</h2>
                            <p>
                                RiceFarm adalah sebuah aplikasi inovatif yang dirancang khusus untuk membantu masyarakat
                                yang awam terhadap pertanian dalam menjadwalkan penanaman padi secara lebih terstruktur
                                dan mudah dipahami. Aplikasi ini bertujuan untuk mempermudah proses pertanian,
                                meningkatkan hasil panen, dan mendukung kemandirian pangan. </p>
                        </div>
                        <a href="/minipagefinances" class="popup-youtube video-play-button with-text mt-15">
                            <div class="effect"></div>
                            <span><i class="fi fi-br-edit"></i></span>
                        </a>
                        <a href="/minipageschedules" class="popup-youtube video-play-button with-text mt-15">
                            <div class="effect"></div>
                            <span><i class="fi fi-bs-document"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img src="assets/img/logo tanpa bg.png" style="height: 500px;">
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Features -->

    <!-- Start Blog Area -->
    <div class="blog-area home-blog blog-grid default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="artikellengkap.html"><img src="assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>15</strong> <span>Jul, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li style="margin-bottom: 10px; margin-top: -15px;">
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="artikellengkap.html">Judul Artikel 1</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="artikellengkap.html"><img src="assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>24</strong> <span>Feb, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li style="margin-bottom: 10px; margin-top: -15px;">
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="artikellengkap.html">Judul Artikel 2</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="artikellengkap.html"><img src="assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>24</strong> <span>Feb, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li style="margin-bottom: 10px; margin-top: -15px;">
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="artikellengkap.html">Judul Artikel 3</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="artikellengkap.html"><img src="assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>24</strong> <span>Feb, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li style="margin-bottom: 10px; margin-top: -15px;">
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="artikellengkap">Judul Artikel 4</a>
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer  -->
    <footer class="bg-dark text-light" style="background-image: url(assets/img/shape/brush-down.png);">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="assets/img/logo tanpa bg.png" alt="Logo" style="height: 300px;">
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item link">
                            <h4 class="widget-title">Tautan Cepat</h4>
                            <ul>
                                <li>
                                    <a href="/">Utama</a>
                                </li>
                                <li>
                                    <a href="/addschedulinges">Buat Penjadwalan Penanaman</a>
                                </li>
                                <li>
                                    <a href="/schedules">Lihat Penjadwalan Penanaman</a>
                                </li>
                                <li>
                                    <a href="/financials">Buat Pencatatan Keuangan</a>
                                </li>
                                <li>
                                    <a href="/articles">Artikel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- ARTIKEL FOOTER -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item recent-post">
                            <h4 class="widget-title">Postingan Terbaru</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Sep, 2022</span>
                                        </div>
                                        <h5><a href="blog-single-with-sidebar.html">Meant widow equal an share least
                                                part. </a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">18 Jul, 2022</span>
                                        </div>
                                        <h5><a href="blog-single-with-sidebar.html">Future Plan & Strategy for
                                                Consutruction </a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ARTIKEL FOOTER -->
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; 2023. RiceFarm. Seluruh Hak Cipta.</p>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
        </div>
        <div class="shape-right-bottom">
            <img src="assets/img/shape/1.png" alt="Image Not Found">
        </div>
        <div class="shape-left-bottom">
            <img src="assets/img/shape/2.png" alt="Image Not Found">
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>