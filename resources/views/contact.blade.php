<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Purwakarta</title>

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
                        <a href="contact.html" class="btn btn--primary s-header__contact-btn">Login</a>                        
                    </div> s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->
        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                                Contact
                            </h1>                            
                        </div>
                    </div>
               </section> <!--pageheader -->  

               <section class="s-testimonials">

                <div class="s-testimonials__header row row-x-center text-center">
                    <div class="column xl-8 lg-12">
    
                        <h3>
                        Kelompok 4 Pagi B 
                        </h3>                        
    
                    </div>
                </div> <!--end s-testimonials__header -->

                <div class="row s-testimonials__content">
                    <div class="column xl-12 testimonials">

                        <div class="swiper-container testimonials__slider page-slider">

                            <div class="swiper-wrapper">
                                <div class="testimonials__slide swiper-slide">
                                    <div class="testimonials__author">
                                        <img src="{{ asset('storage') }}/assets/images/insan.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Muhammad Nur Insan Kurnia</strong>
                                            <span>231351103</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <div class="testimonials__author">
                                        <img src="{{ asset('storage') }}/assets/images/shabirah.png" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Khansa Shabirah Al-Mutawakkil</strong>
                                            <span>231351070</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <div class="testimonials__author">
                                        <img src="{{ asset('storage') }}/assets/images/kholis.png" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Kholisotus Sa'adah</strong>
                                            <span>231351072</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <div class="testimonials__author">
                                        <img src="{{ asset('storage') }}/assets/images/mimma.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Mimma Desmaya</strong>
                                            <span>231351081</span>
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


               <section class="s-pagecontent pagecontent">

                    
                    <div class="row width-narrower pagemain">
                        <div class="column xl-12">
                            {{-- <h2>Ayo bekerjasama !</h2> --}}

                            <div class="row">
                                <div class="column xl-6 md-12 contact-cta">     
                              
                                    <a href="mailto:khebel.1701@gmail.com" class="btn btn--primary u-fullwidth contact-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                                        Send Me An Email
                                    </a>
                                </div> 
{{-- 
                                <a href="mailto:khebel1701@gmail.com" class="btn btn--primary u-fullwidth contact-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path>
                                    </svg>
                                    Send Me An Email
                                </a> --}}
                                

                                <div class="column xl-5 md-12 u-flexitem-x-right">

                                    <div class="contact-block">
                                        <h6>Follow On Social</h6>
                                        <ul class="contact-social social-list">
                                            <li>
                                                <a href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                                    <span class="u-screen-reader-text">Facebook</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                                    <span class="u-screen-reader-text">Twitter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                                    <span class="u-screen-reader-text">Instagram</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                                    <span class="u-screen-reader-text">Dribbble</span>
                                                </a>
                                            </li>
                                        </ul> <!-- end s-footer__social -->
                                    </div>

                                    <div class="contact-block">
                                        <h6>Email</h6>
                                        <a href="mailto:#0">hello@monica.com</a>
                                    </div>

                                    <div class="contact-block">
                                        <h6>Phone</h6>
                                        <ul class="contact-list">
                                            <li><a href="tel:197-543-2345">+197 543 2345</a></li>
                                            <li><a href="tel:197-123-9876">+197 123 9876</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>                        
                    </div> <!-- end pagemain -->

               </section> <!-- pagecontent -->

               
        <!-- # footer 
        ================================================== -->
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

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('storage') }}/assets/js/main.js"></script>

</body>
</html>