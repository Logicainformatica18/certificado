<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>{{$topic[0]->description}}</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ 'assets/libs/owl.carousel/dist/assets/owl.carousel.min.css' }}" />
    <link rel="stylesheet" href="{{ 'assets/libs/aos/dist/aos.css' }}" />
    <!-- YOUTUBE LITE -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
    <!-- YOUTUBE LITE -->
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ 'assets/images/logos/favicon.png' }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper flex-column">
        <header class="header">
            <nav class="navbar navbar-expand-lg py-0 ">
                <div class="container-fluid">
                    <a class="navbar-brand me-0 py-0 " href="{{ url('/') }}">
                        <img src="{{ asset('ayba/3.png') }}"width="100px" alt="img-fluid" />
                    </a>

                    <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>



                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
                            <!-- ------------------------------- -->
                            <!-- start language Dropdown -->

                            <!-- ------------------------------- -->
                            <!-- end language Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                    <div class="d-flex align-items-center gap-2 lh-base">
                                        @if (Auth::user()->photo == '')
                                            <img src="{{ asset('assets/images/profile/user-1.jpg') }}"
                                                class="rounded-circle" width="35" height="35" alt="matdash-img">
                                        @else
                                            <img src="{{ asset('imageusers/' . Auth::user()->photo) }}"
                                                class="rounded-circle" width="35" height="35" alt="matdash-img">
                                        @endif

                                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                                    </div>
                                </a>
                                <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="position-relative px-4 pt-3 pb-2">
                                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                            <img src="../assets/images/profile/user-1.jpg" class="rounded-circle"
                                                width="56" height="56" alt="matdash-img">
                                            <div>
                                                <h5 class="mb-0 fs-12">David McMichael <span
                                                        class="text-success fs-11">Pro</span>
                                                </h5>
                                                <p class="mb-0 text-dark">
                                                    david@wrappixel.com
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                My Profile
                                            </a>
                                            <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                My Subscription
                                            </a>
                                            <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                My Statements <span
                                                    class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                            </a>
                                            <a href="javascript:void(0)" class="p-2 dropdown-item h6 rounded-1">
                                                Account Settings
                                            </a>
                                            <a href="../main/authentication-login2.html"
                                                class="p-2 dropdown-item h6 rounded-1">
                                                Sign Out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->

                            {{-- <li class="nav-item dropdown hover-dd mega-dropdown pages-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    aria-expanded="false">
                                    Pages
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-nav  dropdown-menu-animate-up py-0 overflow-hidden">
                                    <div class="position-relative">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="p-4 pb-3">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative">
                                                                <a href="../main/app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon
                                                                            icon="solar:chat-line-bold-duotone"
                                                                            class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Chat Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon
                                                                            icon="solar:bill-list-bold-duotone"
                                                                            class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Invoice App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon
                                                                            icon="solar:phone-calling-rounded-bold-duotone"
                                                                            class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Contact Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:letter-bold-duotone"
                                                                            class="fs-7 text-danger"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Email App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative">
                                                                <a href="../main/page-user-profile.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:user-bold-duotone"
                                                                            class="fs-7 text-success"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">User Profile</h6>
                                                                        <span
                                                                            class="fs-11 d-block text-body-color">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-calendar.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon
                                                                            icon="solar:calendar-minimalistic-bold-duotone"
                                                                            class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Calendar App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-contact.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon
                                                                            icon="solar:smartphone-2-bold-duotone"
                                                                            class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Contact List Table</h6>
                                                                        <span class="fs-11 d-block text-body-color">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../main/app-notes.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:notes-bold-duotone"
                                                                            class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">Notes Application</h6>
                                                                        <span
                                                                            class="fs-11 d-block text-body-color">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 d-none d-lg-flex">
                                                <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd"
                                                    class="img-fluid mega-dd-bg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                            {{-- <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="https://adminmart.com/support/"
                                    target="_blank">Support</a>
                            </li> --}}

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="body-wrapper overflow-hidden bg-white p-0 m-0 rounded-0">

            @php
                $url = explode('=', $topic[0]->video);
                // $url = 'https://www.youtube.com/embed/' . $url[1];
            @endphp

            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">



                    @if ($topic[0]->type == 'video_drive')
                        <iframe src="https://drive.google.com/file/d/{{ $topic[0]->video }}/preview" width="100%"
                            height="500" allow="autoplay" allowfullscreen></iframe>
                    @elseif($topic[0]->type == 'video_youtube')
                        {{-- <p class="text-dark my-3">
                   {{ $topic[0]->description}}
                </p> --}}
                        @php
                            $url = explode('=', $topic[0]->video);

                        @endphp

                        <lite-youtube style="width:30%" class="rounded-1 border border-2 mb-3 h-100"
                            posterquality="maxresdefault" videoid="{{ $url[1] }}">


                        </lite-youtube>
                    @endif
                    {{-- <lite-youtube videoid="{{$url[1]}}"></lite-youtube> --}}

                    {{-- <iframe width="100%" height="800px" src="{{ $url }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                    <p></p>
                    <h1>&nbsp; {{ strtoupper($topic[0]->description) }}</h1>
                    <p></p>
                    <div class="conatiner">

                        <p class="text-black">
                            @php

                                echo $topic[0]->post;
                            @endphp
                        </p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0">


                            <img src="{{ asset('ayba/bg_user.png') }}" width="100%" alt="matdash-img"
                                style="height: 150px">
                            {{-- <img src="{{ asset('assets/images/backgrounds/profilebg.jpg') }}" alt="matdash-img"
                                class="img-fluid"> --}}

                            <div class="row align-items-center">
                                <div class="col-lg-4 order-lg-1 order-2">
                                    <div class="d-flex align-items-center justify-content-around m-4">
                                        <div class="text-center">
                                            <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                                            <h6 class="mb-0 fw-semibold lh-1">{{ $count }}</h6>
                                            <p class="mb-0 ">Posts</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                                            <h6 class="mb-0 fw-semibold lh-1">100</h6>
                                            <p class="mb-0 ">Likes</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                                            <h6 class="mb-0 fw-semibold lh-1">100</h6>
                                            <p class="mb-0 ">Followers</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                                    <div class="mt-n5">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <div class="d-flex align-items-center justify-content-center round-110">
                                                <div
                                                    class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">

                                                    @if ($topic[0]->user->photo == '')
                                                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}"
                                                            alt="matdash-img" class="w-100 h-100">
                                                    @else
                                                        <img src="{{ asset('imageusers/' . $topic[0]->user->photo) }}"
                                                            alt="matdash-img" class="img-fluid">
                                                    @endif



                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h5 class="mb-0">{{ $topic[0]->user->firstname }}
                                                {{ $topic[0]->user->names }}</h5>
                                            <p class="mb-0">Coach</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-last">
                                    <ul
                                        class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-4 gap-3 m-10">
                                        <li>
                                            <a class="d-flex align-items-center justify-content-center btn btn-primary p-2 fs-4 rounded-circle"
                                                href="{{ $topic[0]->user->fb }}" width="30"
                                                height="30"target="_blank">
                                                <i class="ti ti-brand-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle"
                                                href="{{ $topic[0]->user->portfolio }}"target="_blank">
                                                <i class="ti ti-brand-dribbble"></i>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a class="btn btn-warning d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle"
                                                href="{{$topic[0]->user->portfolio}}"target="_blank">
                                                <i class="ti ti-brand-github"></i>
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="btn btn-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle"
                                                href="{{ $topic[0]->user->youtube }}" target="_blank">
                                                <i class="ti ti-brand-youtube"></i>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <button class="btn btn-primary text-nowrap">Add To Story</button>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav nav-pills user-profile-tab justify-content-center mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                                id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active hstack gap-2 rounded-0 fs-12 py-6"
                                        id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends"
                                        type="button" role="tab" aria-controls="pills-friends"
                                        aria-selected="false">
                                        <i class="ti ti-file fs-5"></i>
                                        <span class="d-none d-md-block">Temas</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  hstack gap-2 rounded-0 fs-12 py-6" id="pills-profile-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                        role="tab" aria-controls="pills-profile" aria-selected="true">
                                        <i class="ti ti-user-circle fs-5"></i>
                                        <span class="d-none d-md-block">Comentarios</span>
                                    </button>
                                </li>
                                @if ($topic[0]->file_1!="")
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link hstack gap-2 rounded-0 fs-12 py-6"
                                        id="pills-followers-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-followers" type="button" role="tab"
                                        aria-controls="pills-followers" aria-selected="false">
                                        <i class="ti ti-download fs-5"></i>
                                        <span class="d-none d-md-block">Recursos</span>
                                    </button>
                                </li>
                                @endif




                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show " id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">





                                <div class="col-lg-12 container-fluid">

                                    <div id="disqus_thread"></div>

                                    <script>
                                        /**
                                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                        /*
                                        var disqus_config = function () {
                                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                        };
                                        */
                                        (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document,
                                                s = d.createElement('script');
                                            s.src = 'https://ayba-corp.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                            (d.head || d.body).appendChild(s);
                                        })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a
                                            href="https://disqus.com/?ref_noscript">comments powered by
                                            Disqus.</a></noscript>



                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-followers" role="tabpanel"
                            aria-labelledby="pills-followers-tab" tabindex="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <h4 class="card-title">Recursos</h4>
                                    <p class="card-subtitle mb-3">{{ $topic[0]->instruction }}</p>
                                    <a download="{{ $topic[0]->resource_1 }}"
                                        href="{{ asset('resource/' . $topic[0]->resource_1) }}" target="_blank"
                                        class="
                                      btn
                                      d-block
                                      w-100
                                      fw-medium
                                      bg-success-subtle
                                      text-success
                                      block-card
                                    ">
                                        Descargar
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane active fade show" id="pills-friends" role="tabpanel"
                            aria-labelledby="pills-friends-tab" tabindex="0" style="margin-top:-30px; ">
                            <iframe src="{{ url('topic_list/' . $topic[0]->course_id) }}" frameborder="0"
                                width="100%" height="1000px">

                            </iframe>

                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-3 container-fluid">


                </div> --}}
            </div>


            {{-- <section class="hero-section text-bg-light position-relative overflow-hidden mb-0 mb-lg-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8">

                            <div class="hero-content my-5 my-xl-0">
                <h6 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <i class="ti ti-rocket text-secondary fs-6"></i>Kick startwwww
                  your project with
                </h6>
                <h1 class="fw-bolder mb-7 fs-13" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  Enhance <span class="text-primary">Developer's Productivity</span> with a MatDash

                </h1>
                <p class="fs-5 mb-5 text-dark fw-normal" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                  MatDash comes with light & dark color skins, well designed
                  dashboards, applications and pages.
                </p>
                <div class="d-sm-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                  <a class="btn btn-primary px-5 py-6 btn-hover-shadow d-block mb-3 mb-sm-0" href="../main/authentication-login2.html">Login</a>
                  <a class="btn btn-outline-primary d-block scroll-link px-7 py-6" href="#production-template">Live
                    Preview</a>
                </div>
              </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="hero-img-slide position-relative bg-light p-4 rounded">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="banner-img-1 slideup">
                                            <img src="../assets/images/hero-img/bannerimg1.png" alt="matdash-img"
                                                class="img-fluid" />
                                        </div>
                                        <div class="banner-img-1 slideup">
                                            <img src="../assets/images/hero-img/bannerimg1.png" alt="matdash-img"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="banner-img-2 slideDown">
                                            <img src="../assets/images/hero-img/bannerimg2.png" alt="matdash-img"
                                                class="img-fluid" />
                                        </div>
                                        <div class="banner-img-2 slideDown">
                                            <img src="../assets/images/hero-img/bannerimg2.png" alt="matdash-img"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


        </div>
        <footer class="footer-part pt-7 pb-5 "style="background: linear-gradient(to right,#023039,#0d0d0e)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="index-new.html">
                                <img src="{{ asset('ayba/4.png') }}"width="100px" alt="matdash-img"
                                    class="img-fluid pb-3" />
                            </a>
                            <p class="mb-0 text-white">
                                Copyright © 2025
                                <a class="text-white text-hover-primary border-bottom border-primary"
                                    href="https://anthonycode.com"> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header p-4 text-center">
                <img src="{{ asset('ayba/3.png') }}" alt="matdash-img" class="img-fluid" width="100%" />
            </div>
            <div class="offcanvas-body p-4">
                <ul class="navbar-nav justify-content-end flex-grow-1">

                    {{-- <li class="nav-item mt-3 dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages <i class="ti ti-chevron-down fs-14"></i>
                        </a>
                        <div class="dropdown-menu mt-3 ps-1">
                            <div class="position-relative">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="p-4 pb-3">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="position-relative">
                                                        <a href="../main/app-chat.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:chat-line-bold-duotone"
                                                                    class="fs-7 text-primary"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Chat Application</h6>
                                                                <span class="fs-11 d-block text-body-color">New
                                                                    messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-invoice.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:bill-list-bold-duotone"
                                                                    class="fs-7 text-secondary"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Invoice App</h6>
                                                                <span class="fs-11 d-block text-body-color">Get latest
                                                                    invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-contact2.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon
                                                                    icon="solar:phone-calling-rounded-bold-duotone"
                                                                    class="fs-7 text-warning"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Contact Application</h6>
                                                                <span class="fs-11 d-block text-body-color">2 Unsaved
                                                                    Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-email.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:letter-bold-duotone"
                                                                    class="fs-7 text-danger"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Email App</h6>
                                                                <span class="fs-11 d-block text-body-color">Get new
                                                                    emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative">
                                                        <a href="../main/page-user-profile.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:user-bold-duotone"
                                                                    class="fs-7 text-success"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">User Profile</h6>
                                                                <span class="fs-11 d-block text-body-color">learn more
                                                                    information</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-calendar.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon
                                                                    icon="solar:calendar-minimalistic-bold-duotone"
                                                                    class="fs-7 text-primary"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Calendar App</h6>
                                                                <span class="fs-11 d-block text-body-color">Get
                                                                    dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-contact.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                                                    class="fs-7 text-secondary"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Contact List Table</h6>
                                                                <span class="fs-11 d-block text-body-color">Add new
                                                                    contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-notes.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                <iconify-icon icon="solar:notes-bold-duotone"
                                                                    class="fs-7 text-warning"></iconify-icon>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Notes Application</h6>
                                                                <span class="fs-11 d-block text-body-color">To-do and
                                                                    Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 d-none d-lg-flex">
                                        <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd"
                                            class="img-fluid mega-dd-bg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="{{ url('logout') }}">Cerrar Sesión</a>
                    </li>
                    {{-- <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark" href="#">Pages</a>
                    </li> --}}
                </ul>
                {{-- <form class="d-flex mt-3" role="search">
                    <a href="../main/authentication-login2.html" class="btn btn-primary w-100 py-2">Login</a>
                </form> --}}
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>

</body>

</html>
