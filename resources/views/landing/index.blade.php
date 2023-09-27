<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Foodwagon | Responsive, Ecommerce &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('landing/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('landing/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('landing/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('landing/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('landing/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('landing/public/assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>
    <style>
        .img-fluid {
            max-height: 200px;
        }
    </style>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
                        src="{{ asset('landing/public/assets/img/gallery/logo.svg') }}" alt="logo" /><span
                        class="text-1000 fs-3 fw-bold ms-2 text-gradient">foodwaGon</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                    <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                        <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
                                class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current
                                Location </span><span>Mirpur 1 Bus Stand, Dhaka</span></p>
                    </div>
                    <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                        <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                            <input class="form-control border-0 input-box bg-100" type="search"
                                placeholder="Search Food" aria-label="Search" />
                        </div>
                        <button class="btn btn-white shadow-warning text-warning" type="submit"> <i
                                class="fas fa-user me-2"></i>Login</button>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-5 overflow-hidden bg-primary" id="home">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                            href="#!"><img class="img-fluid" style="max-height: 100%;"
                                src="{{ asset('landing/public/assets/img/gallery/hero-header.png') }}"
                                alt="hero-header" /></a></div>
                    <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                        <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
                        <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br
                                class="d-none d-xxl-block" />are accessible near you</h1>
                        <div class="card w-xxl-75">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true"><i
                                                class="fas fa-motorcycle me-2"></i>Delivery</button>
                                        <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false"><i
                                                class="fas fa-shopping-bag me-2"></i>Pickup</button>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <form class="row gx-2 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputDelivery">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputDelivery" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <form class="row gx-4 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputPickup">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputPickup" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary-gradient">

            <div class="container">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-9">
                        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('landing/public/assets/img/gallery/location.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Select location</h5>
                                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('landing/public/assets/img/gallery/order.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Choose order</h5>
                                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('landing/public/assets/img/gallery/pay.png') }}" height="112"
                                        alt="..." />
                                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('landing/public/assets/img/gallery/meals.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-4 overflow-hidden">

            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Featured Item</h5>
                    </div>
                    <div class="col-12">
                        <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row gx-3 h-100 align-items-center">
                                        @foreach ($featured as $item)
                                            <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                                <div class="card card-span h-100 rounded-3"><img
                                                        class="img-fluid rounded-3 h-100"
                                                        src="{{ asset('landing/public/assets/img/gallery/' . $item->gambar_product . '') }}"
                                                        alt="..." />
                                                    <div class="card-body ps-0">
                                                        <h5 class="fw-bold text-1000 text-truncate mb-1">
                                                            {{ $item->nama_product }}
                                                        </h5>
                                                        <div><span class="text-warning me-2"><i
                                                                    class="fas fa-map-marker-alt"></i></span><span
                                                                class="text-primary">{{ $item->kategori->nama_kategori }}</span>
                                                        </div><span class="text-1000 fw-bold">Rp.
                                                            {{ $item->harga_product }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger"
                                                        href="#!" role="button">Order now</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row gx-3 h-100 align-items-center">
                                        @foreach ($featured as $item)
                                            <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                                <div class="card card-span h-100 rounded-3"><img
                                                        class="img-fluid rounded-3 h-100"
                                                        src="{{ asset('landing/public/assets/img/gallery/' . $item->gambar_product . '') }}"
                                                        alt="..." />
                                                    <div class="card-body ps-0">
                                                        <h5 class="fw-bold text-1000 text-truncate mb-1">
                                                            {{ $item->nama_product }}
                                                        </h5>
                                                        <div><span class="text-warning me-2"><i
                                                                    class="fas fa-map-marker-alt"></i></span><span
                                                                class="text-primary">{{ $item->kategori->nama_kategori }}</span>
                                                        </div><span class="text-1000 fw-bold">Rp.
                                                            {{ $item->harga_product }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger"
                                                        href="#!" role="button">Order now</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row gx-3 h-100 align-items-center">
                                        @foreach ($featured as $item)
                                            <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                                <div class="card card-span h-100 rounded-3"><img
                                                        class="img-fluid rounded-3 h-100"
                                                        src="{{ asset('landing/public/assets/img/gallery/' . $item->gambar_product . '') }}"
                                                        alt="..." />
                                                    <div class="card-body ps-0">
                                                        <h5 class="fw-bold text-1000 text-truncate mb-1">
                                                            {{ $item->nama_product }}
                                                        </h5>
                                                        <div><span class="text-warning me-2"><i
                                                                    class="fas fa-map-marker-alt"></i></span><span
                                                                class="text-primary">{{ $item->kategori->nama_kategori }}</span>
                                                        </div><span class="text-1000 fw-bold">Rp.
                                                            {{ $item->harga_product }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger"
                                                        href="#!" role="button">Order now</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row gx-3 h-100 align-items-center">
                                        @foreach ($featured as $item)
                                            <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                                <div class="card card-span h-100 rounded-3"><img
                                                        class="img-fluid rounded-3 h-100"
                                                        src="{{ asset('landing/public/assets/img/gallery/' . $item->gambar_product . '') }}"
                                                        alt="..." />
                                                    <div class="card-body ps-0">
                                                        <h5 class="fw-bold text-1000 text-truncate mb-1">
                                                            {{ $item->nama_product }}
                                                        </h5>
                                                        <div><span class="text-warning me-2"><i
                                                                    class="fas fa-map-marker-alt"></i></span><span
                                                                class="text-primary">{{ $item->kategori->nama_kategori }}</span>
                                                        </div><span class="text-1000 fw-bold">Rp.
                                                            {{ $item->harga_product }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger"
                                                        href="#!" role="button">Order now</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev carousel-icon" type="button"
                                data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span
                                    class="carousel-control-prev-icon hover-top-shadow"
                                    aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next carousel-icon" type="button"
                                data-bs-target="#carouselPopularItems" data-bs-slide="next"><span
                                    class="carousel-control-next-icon hover-top-shadow"
                                    aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section id="testimonial">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">List Menu</h5>
                    </div>
                </div>
                <div class="row gx-2">
                  @foreach ($products as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100"
                                src="{{ asset('landing/public/assets/img/gallery/'.$item->gambar_product.'') }}"
                                alt="..." />
                            <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i
                                        class="fas fa-tag me-2 fs-0"></i><span class="fs-0">20%
                                        off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i
                                        class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span>
                            </div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                        src="{{ asset('landing/public/assets/img/gallery/food-world-logo.png') }}"
                                        alt="" />
                                    <div class="flex-1 ms-3">
                                        <h5 class="mb-0 fw-bold text-1000">{{ $item->nama_product }}</h5><span
                                            class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span
                                            class="mb-0 text-primary">{{ $item->kategori->nama_kategori }}</span>
                                    </div>
                                </div><span class="badge bg-soft-danger p-2"><span
                                        class="fw-bold fs-1 text-danger">Rp {{ $item->harga_product }}</span></span>
                            </div>
                        </div>
                    </div>
                  @endforeach
                    <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-primary"
                            href="#!">View All <i class="fas fa-chevron-right ms-2"> </i></a></div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pt-7 bg-1000">

            <div class="container">
                <div class="row justify-content-lg-between">
                    <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San
                                    Francisco</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Miami</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Diego</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">East Bay</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Long Beach</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los
                                    Angeles</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington
                                    DC</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Seattle</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Portland</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Nashville</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York
                                    City</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange
                                    County</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Atlanta</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Charlotte</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Denver</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Chicago</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Phoenix</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Las Vegas</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Oklahoma
                                    City</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Columbus</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Mexico</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none"
                                    href="#!">Albuquerque</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New
                                    Orleans</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="text-900" />
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                        <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About Us</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Careers</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
                        <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp;
                                    Support</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner with
                                    us </a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with
                                    us</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with
                                    us</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                        <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp;
                                    Conditions</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp;
                                    Cancellation</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy
                                    Policy</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie
                                    Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                        <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp;
                                    Conditions</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp;
                                    Cancellation</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy
                                    Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                        <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
                        <div class="text-start my-3"> <a href="#!">
                                <svg class="svg-inline--fa fa-instagram fa-w-14 fs-2 me-2" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="#BDBDBD"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg></a><a href="#!">
                                <svg class="svg-inline--fa fa-facebook fa-w-16 fs-2 mx-2" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="facebook" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#BDBDBD"
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                    </path>
                                </svg></a><a href="#!">
                                <svg class="svg-inline--fa fa-twitter fa-w-16 fs-2 mx-2" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="twitter" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#BDBDBD"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg></a></div>
                        <h3 class="text-500 my-4">Receive exclusive offers and <br />discounts in your mailbox</h3>
                        <div class="row input-group-icon mb-5">
                            <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
                                <input class="form-control input-box bg-800 border-0" type="email"
                                    placeholder="Enter Email" aria-label="email" />
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border border-800" />
                <div class="row flex-center pb-3">
                    <div class="col-md-6 order-0">
                        <p class="text-200 text-center text-md-start">All rights Reserved &copy; Your Company, 2021</p>
                    </div>
                    <div class="col-md-6 order-1">
                        <p class="text-200 text-center text-md-end"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15"
                                height="15" fill="#FFB30E" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold" href="https://themewagon.com/"
                                target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('landing/public/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('landing/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/public/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('landing/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('landing/public/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
