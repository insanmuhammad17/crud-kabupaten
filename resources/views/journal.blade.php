<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita - Purwakarta</title>

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

                    {{-- <div class="s-header__contact">
                        <a href="login" : active="request()->routeIs('login')" class="btn btn--primary s-header__contact-btn">Login for create news</a>                        
                    </div> <!-- s-header__contact --> --}}
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        Berita
                    </h1>
                    
                </div>
            </div>
       </section> <!-- pageheader --> 
               

               <section class="s-pagecontent pagecontent">

                    <div class="row">
                        <div class="column xl-12 grid-block">          
        
                            <!-- <div class="grid-full">         -->
                                <div class="grid-full grid-list-items">

                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                                <a href="blog.html">Berita</a>
                                            </div>
                                            <h3 class="blog-card__title"><a href="https://www.purwakartakab.go.id/read/2792"> Percepat Pembangunan Kawasan Pedesaan, Purwakarta Kembangkan Puluhan Desa Wisata</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                                <a href="https://www.purwakartakab.go.id/read/2792">Selengkapnya</a>.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                                <a href="blog.html">Berita</a>
                                            </div>
                                            <h3 class="blog-card__title"><a href="https://www.purwakartakab.go.id/read/2791">Dinkes Purwakarta Capai 100 Persen Pengukuran Intervensi Serentak Pencegahan Stunting</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                                <a href="https://www.purwakartakab.go.id/read/2792">Selengkapnya</a>.
                                            </p>
                                        </div>
                                                            
                                    </div> <!-- end blog card -->

                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                                <a href="blog.html">Berita</a>
                                            </div>
                                            <h3 class="blog-card__title"><a href="https://www.purwakartakab.go.id/read/2790"> Genjot Semangat dan Jiwa Melayani, Pemkab Purwakarta ESQ Training ASN</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                                <a href="https://www.purwakartakab.go.id/read/2790">Selengkapnya</a>.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                                <a href="blog.html">Berita</a>
                                            </div>
                                            <h3 class="blog-card__title"><a href="https://www.purwakartakab.go.id/read/2789">Sasar Ribuan Akseptor, Pemkab Purwakarta Gelar Pelayanan KB Serentak</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                                <a href="https://www.purwakartakab.go.id/read/2789">Selengkapnya</a>.
                                            </p>
                                        </div>
                                                            
                                    </div> <!-- end blog card -->
        
                                </div> <!-- grid-list-items -->
                            <!-- </div>     -->

                        </div> <!-- end grid-block-->
                    </div> <!-- end row -->

                    <!-- pagination -->
                    <div class="row navigation pagination">
                        <div class="column xl-12">
                            <nav class="pgn">
                                <ul>
                                    <li>
                                        <a class="pgn__prev" href="#0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"/></svg>
                                        </a>
                                    </li>
                                    <li><a class="pgn__num" href="#0">1</a></li>
                                    <li><span class="pgn__num current">2</span></li>
                                    <li><a class="pgn__num" href="#0">3</a></li>
                                    <li><a class="pgn__num" href="#0">4</a></li>
                                    <li><a class="pgn__num" href="#0">5</a></li>
                                    <li><span class="pgn__num dots">…</span></li>
                                    <li><a class="pgn__num" href="#0">8</a></li>
                                    <li>
                                        <a class="pgn__next" href="#0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!-- end column -->
                    </div> <!-- end pagination -->

               </section>

        </section> <!-- s-content-->

        <!-- # cta
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