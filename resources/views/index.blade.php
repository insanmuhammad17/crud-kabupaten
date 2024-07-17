<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purwakarta</title>

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
    <div id="page" class="s-pagewrap ss-home">


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

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">Kabupaten Purwakarta</div>
                            <h1 class="s-intro__content-title">
                            Kabupaten Purwakarta adalah sebuah kabupaten <br>
                            yang terkurung daratan di Jawa Barat, Indonesia. <br>
                            Kota Purwakarta adalah ibu kota kabupatennya. <br>

                            </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="{{ asset('storage') }}/assets/images/intro-bg.png">
                                {{-- <div class="lines">                               
                                    <span></span>                                  
                                </div> --}}
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Scroll for more</span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->
        </section>
    </div>

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        {{-- <img src="{{ asset('storage') }}/assets/images/geometric_shape.svg" alt="" class="s-about__content-imgbg"> --}}

                        <div class="section-header grid-section-split__header">                     
                            <h2 class="text-display-title">
                           KABUPATEN PURWAKARTA
                            </h2>                           
                        </div> <!-- end section-header -->

                     
                        <div class="s-about__content-main grid-section-split__primary">
                            <p class="attention-getter">
                                Jangan sampai tertukar dengan Purwokerto , sebuah kota di provinsi Jawa Tengah.
                            </p>

                            <p class="attention-getter">
                                Kabupaten Purwakarta adalah sebuah kabupaten yang terkurung daratan di Jawa Barat , Indonesia . Kota Purwakarta adalah ibu kota kabupatennya .

                                Luas wilayah Kabupaten ini 971,72 km2, dan jumlah penduduknya 852.521 jiwa pada Sensus 2010 dan 997.869 jiwa pada Sensus 2020, sedangkan perkiraan resmi pada pertengahan tahun 2023 adalah 1.037.068 jiwa - terdiri dari 526.035 laki-laki dan 511.033 perempuan - dengan kepadatan penduduk 1.067,2 jiwa per km2 . Bagian barat kabupaten ini meliputi waduk besar Waduk Jatiluhur, sebelah barat kota Purwakarta dan 70 km dari Jakarta, yang dibuat oleh Bendungan Jatiluhur di Sungai Tarum .
                            </p>

                            <p class="attention-getter">
                                Kabupaten Purwakarta terbagi menjadi tujuh belas kecamatan , yang tercantum di bawah ini dengan luas wilayah dan jumlah penduduknya pada Sensus 2010 dan Sensus 2020, bersama dengan perkiraan resmi pada pertengahan tahun 2023. [1] Tabel ini juga memberikan lokasi pusat administrasi distrik, jumlah desa administratif di setiap distrik (total 183 desa pedesaan dan 9 kelurahan perkotaan ), dan kode posnya.
                            </p>
                        </div> <!-- end s-about__content-main -->
                    </div>


                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                          
                        </div>
                                         
                    </div>  <!-- pageintro -->       

                    <div class="row">
                        <div class="column xl-12 grid-block">             


                        </div> <!-- end grid-block-->
                    </div> <!-- end row -->

               </section> <!-- pagecontent -->


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
                </div>
            </section>

            <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
            <script src="{{ asset('storage') }}/assets/js/main.js"></script>
</body>
</html>
