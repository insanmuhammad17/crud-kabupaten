<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kepemerintahan - Purwakarta</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage') }}/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage') }}/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage') }}/assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/" : active="request()->routeIs('index')">
                            <img src="{{ asset('storage') }}/assets/images/logo.png" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="about" : active="request()->routeIs('about')">Kepemerintahan</a></li>
                        <li><a href="service" : active="request()->routeIs('service')">Wilayah</a></li>
                        <li><a href="journal" : active="request()->routeIs('journal')">Berita</a></li>
                        <li><a href="contact" : active="request()->routeIs('contact')">Contact</a></li>

                        @if (Route::has('login'))
                        {{-- <nav class="-mx-3 flex flex-1 justify-end"> --}}
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif

                    </ul> <!-- s-header__menu-links -->

                    
                    <!-- <div class="s-header__contact">
                        <a href="login" : active="request()->routeIs('login')" class="btn btn--primary s-header__contact-btn">Login</a>                        
                    </div> s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        {{-- <span class="page-title__small-type text-pretitle">Services</span> --}}
                     Struktur Kepemerintahan
                    </h1>
                    
                </div>
            </div>
       </section> <!-- pageheader -->  
       

               <section class="s-testimonials">

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                            <h3>
                            Pemimpin Daerah
                            </h3>                        
                        </div>
                    </div> <!--end s-testimonials__header -->

                    
                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <div class="testimonials__author">
                                            <img src="{{ asset('storage') }}/assets/images/bupati.jpg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Drs. Benny Irwan, M.Si, M.A.</strong>
                                                <span>Penjabat Bupati</span>
                                            </cite>
                                        </div>
                                    </div>
                                </div> <!-- end swiper-wrapper --> 

                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                            <h3>
                            Sekretariat Daerah 
                            </h3>                        
                        </div>
                    </div> <!--end s-testimonials__header -->
                    
                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <div class="testimonials__author">
                                            <img src="{{ asset('storage') }}/assets/images/guest.png" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Drs. H.Iyus Permana, MM</strong>
                                                <span>Sekretaris Daerah</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 
                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                            <h3>
                            Bidang Perekonomian Dan Pembangunan
                            </h3>                        
                        </div>
                    </div> <!--end s-testimonials__header -->
                    
                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <div class="testimonials__author">
                                            <img src="{{ asset('storage') }}/assets/images/guest.png" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Ir. H. Tri Hartono, MM</strong>
                                                <span>Asisten sekda bidang perekonomian dan pembangunan</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 
                                <div class="swiper-pagination"></div>
                                
                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                            <h3>
                            Bidang SDM, Keuangan dan Administrasi
                            </h3>                        
                        </div>
                    </div> <!--end s-testimonials__header -->
                    
                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <div class="testimonials__author">
                                            <img src="{{ asset('storage') }}/assets/images/guest.png" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>H. Saepuddin, M.Si</strong>
                                                <span>Asisten sekda bidang sumber daya manusia, keuangan dan administrasi</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 
                                <div class="swiper-pagination"></div>
                                
                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                            <h3>
                            Bidang Pemerintahan, Hukum dan Kesejahteraan Rakyat 
                            </h3>                        
                        </div>
                    </div> <!--end s-testimonials__header -->
                    
                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <div class="testimonials__author">
                                            <img src="{{ asset('storage') }}/assets/images/guest.png" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>no name</strong>
                                                <span>Asisten sekda bidang pemerintahan, hukum dankesejahteraan rakyat</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 
                                <div class="swiper-pagination"></div>
                                
                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

               </section> <!-- end s-testimonials -->

        </section> <!-- s-content-->


        <footer class="s-footer">
            
            <div class="row s-footer__bottom">
               
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright by kelompok 4 2024</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </p>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->

    <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('storage') }}/assets/js/main.js"></script>

</body>
</html>