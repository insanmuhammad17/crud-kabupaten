<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wilayah - Purwakarta</title>

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
                                Wilayah
                            </h1>
                            
                        </div>
                    </div>
               </section> <!-- pageheader -->  

               

               <section class="s-pagecontent pagecontent">

                <div class="row pagemedia">
                    <d class="column xl-12">
                        <figure class="page-media">                                
                            <img src="{{ asset('storage') }}/assets/images/map.jpg" 
                                 srcse{{ asset('storage') }}/assets/t="images/thumbs/contact/contact-2400.jpg 2400w, 
                                         images/thumbs/contact/contact-1200.jpg 1200w, 
                                         images/thumbs/contact/contact-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                        </figure>
                    </d>
                </div> <!-- pagemedia --> 

                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Kecamatan</h2>
                        </div>
                                         
                    </div>  <!-- pageintro -->       

                    <div class="row">
                        <div class="column xl-12 grid-block">             
                            
                            <div class="grid-full grid-list-items list-items show-ctr">
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Babakan cikao</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Babakancikao adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan Kabupaten Karawang, kecamatan Jatiluhur di barat, kecamatan Bungursari di timur, dan kecamatan Purwakarta di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Rusaman Arifin, S.H., M.M</li>
                                            <li>Total : 47,172 jiwa</li>
                                            <li>Kode Pos : 41151</li>
                                            <li>Luas Wilayah : 42,40 km²</li>
                                            <li>Desa/Kelurahan : 9</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Bojong</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Bojong adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan kecamatan Pondoksalam di utara, kecamatan Darangdan di barat, kecamatan Wanayasa di timur, dan Kabupaten Bandung Barat di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 50,724 jiwa</li>
                                            <li>Kode Pos : 41164</li>
                                            <li>Luas Wilayah : 68,69 km²</li>
                                            <li>Desa/Kelurahan : 14</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Bungursari</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Bungursari adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatsan dengan Kabupaten Karawang di utara, kecamatan Babakancikao di barat, kecamatan Campaka di timur, dan kecamatan Purwakarta di selatan
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Drs. Saepuddin MS.i</li>
                                            <li>Total : 54,893 jiwa</li>
                                            <li>Kode Pos : 41181</li>
                                            <li>Luas Wilayah : 54,66 km²</li>
                                            <li>Desa/Kelurahan : 10</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Campaka</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Campaka adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan Kabupaten Karawang di utara, kecamatan Bungursari di barat, Kabupaten Subang di timur, dan kecamatan Cibatu di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 38,652 jiwa</li>
                                            <li>Kode Pos : 41180</li>
                                            <li>Luas Wilayah : - km²</li>
                                            <li>Desa/Kelurahan : 10</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Cibatu</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Cibatu adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan Kabupaten Subang di utara dan timur, kecamatan Campaka di barat, kecamatan Kiarapedes di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Drs.Djuanda,M.Si</li>
                                            <li>Total : 26,281 jiwa</li>
                                            <li>Kode Pos : 41182</li>
                                            <li>Luas Wilayah : 56,50 km²</li>
                                            <li>Desa/Kelurahan : 10</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Darangdan</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Darangdan adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Kecamatan ini berbatasan dengan kecamatan Sukatani di utara, kecamatan Plered di barat, kecamatan Bojong di timur, dan Kabupaten Bandung Barat di selatan. Pusat pemerintahannya berada di Desa Darangdan. Di desa ini terdapat Polsek, Kantor Kecamatan, dan Puskesmas
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 64,561 jiwa</li>
                                            <li>Kode Pos : 41151</li>
                                            <li>Luas Wilayah : 67,39 km²</li>
                                            <li>Desa/Kelurahan : 15</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Jatiluhur</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Jatiluhur adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia.Dikelilingi oleh bendungan atau waduk yang merupakan sumber utama pasokan air untuk air minum,irigasi dan yang paling utama adalah sebagai Pembangkit Listrik Tenaga Air (PLTA)untuk daerah Jabodetabek dan sekitarnya,disamping itu merupakan tempat pembudidayaan ikan kolam terapung atau keramba.

                                            Batas-batas wilayah Kecamatan Jatiluhur adalah sebagai berikut: (berdasar Peta di Internet dan data dari kecamatan Jatiluhur)
                                            
                                            1. Batas Utara : Kabupaten Karawang
                                            
                                            2. Batas Selatan : Kecamatan Pasawahan
                                            
                                            3. Batas Barat : Kecamatan Sukatani
                                            
                                            4. Batas Timur : Kecamatan Babakancikao dan kecamatan Purwakarta.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Endang Saepudin, S.KM.</li>
                                            <li>Total : 63,634 jiwa</li>
                                            <li>Kode Pos : 41152 - 41161</li>
                                            <li>Luas Wilayah :60,11 km²</li>
                                            <li>Desa/Kelurahan : 10</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Plered</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Plered adalah salah satu kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat yang sudah lama terkenal sebagai sentra industri keramik, keramik yang dihasilkan selain untuk pasar dalam negeri juga sebagai komoditas ekspor ke manca negara.

                                            Di kecamatan ini pula terdapat Stasiun Plered, yang terletak di desa Plered.
                                            
                                            Berbatasan dengan kecamatan Sukatani di utara, kecamatan Tegalwaru di barat, kecamatan Darangdan di timur dan selatan. Terdapat beberapa tempat wisata dan perbukitan di daerah Plered di yaitu Gunung Cupu.
                                            
                                            Pada tahun 2019 Kecamatan Plered menjadi salah satu lokasi KKN Tematik (Kuliah Kerja Nyata) Universitas Singaperbangsa Karawang dengan tema Citarum Harum. KKN Tematik Citarum Harum sendiri merupakan peran serta Universitas Singaperbangsa Karawang dalam akselerasi program pemerintah untuk normalisasi sungai Citarum. KKN Tematik berfokus pada penyelesaian suatu masalah di suatu daerah, KKN Tematik Citarum Harum berfokus pada permasalahan lingkungan, tapi tidak mengesampingkan masalah lain yang terjadi atau ditemukan di wilayah tersebut, seperti pendidikan, kesehatan, dan ekonomi yang harus dicari solusinya secara terintegritas dari berbagai disiplin ilmu.
                                            
                                            Salah satu kelompok KKN di Desa Gandamekar selain berfokus pada permasalahan lingkungan, divisi pendidikan di desa tersebut membuat Saung Literasi yaitu sarana siswa di sana untuk melakukan aktivitas literasinya di luar sekolah.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 79,350 jiwa</li>
                                            <li>Kode Pos : 41162</li>
                                            <li>Luas Wilayah : 31,48 km²</li>
                                            <li>Desa/Kelurahan : 16</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Maniis</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Maniis adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Kecamatan Maniis berbatasan langsung dengan Waduk Cirata.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 33,285 jiwa</li>
                                            <li>Kode Pos : 41166</li>
                                            <li>Luas Wilayah : 71,64 km²</li>
                                            <li>Desa/Kelurahan : 8</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Pasawahan</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Pasawahan adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan kecamatan Purwakarta di utara, kecamatan Jatiluhur di barat, kecamatan Campaka di timur, dan kecamatan Pondoksalam di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : H. Helmi Setiawan, S.STP</li>
                                            <li>Total : 47,660 jiwa</li>
                                            <li>Kode Pos : 41172</li>
                                            <li>Luas Wilayah : 36.96 km²</li>
                                            <li>Desa/Kelurahan : 12</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kiarapedes</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Kiarapedes adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Kecamatan ini berbatasan dengan kecamatan Cibatu di utara, kecamatan Wanayasa di barat dan selatan, dan Kabupaten Subang di timur.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Drs.H.Djaka S. Muchsin (Alm), Tedi Gustiadi BA, Idat Hadiat BA, Asep Sandjaya, S.Ip</li>
                                            <li>Total : 24,831 jiwa</li>
                                            <li>Kode Pos : 41151</li>
                                            <li>Luas Wilayah : 52,16 km²</li>
                                            <li>Desa/Kelurahan : 10</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Pondoksalam</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Pondoksalam adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan kecamatan Pasawahan di utara, kecamatan Jatiluhur di barat, kecamatan Wanayasa di timur, dan kecamatan Bojong di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : -</li>
                                            <li>Total : 27,804 jiwa</li>
                                            <li>Kode Pos : 41151</li>
                                            <li>Luas Wilayah :44,08 km²</li>
                                            <li>Desa/Kelurahan : 11</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Purwakarta</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Purwakarta adalah sebuah kecamatan sekaligus menjadi ibu kota kabupaten di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Dodih Hamdani, S.E</li>
                                            <li>Total :178.861 jiwa</li>
                                            <li>Kode Pos : 41111-41119</li>
                                            <li>Luas Wilayah : 24,45 km²</li>
                                            <li>Desa/Kelurahan : 1/9</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Sukasari</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Sukasari adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Kecamatan Sukasari merupakan kecamatan dengan jumlah penduduk paling sedikit di Kabupaten Purwakarta dan letaknya berada di ujung barat dari Kabupaten Purwakarta tepatnya sepanjang pesisir barat Waduk Jatiluhur. Kecamatan Sukasari berbatasan langsung dengan tiga kabupaten, yaitu di bagian barat adalah kawasan Jonggol yang berada di Kabupaten Bogor, sebelah utara adalah Kabupaten Karawang dan Kabupaten Cianjur di sisi selatan, sedangkan sebelah timur adalah Kecamatan Jatiluhur.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Drs. Al Idrus Nurhasan</li>
                                            <li>Total : 14.445 jiwa</li>
                                            <li>Kode Pos : 41116</li>
                                            <li>Luas Wilayah : 92,01 km²</li>
                                            <li>Desa/Kelurahan : 5</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Sukatani</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Sukatani adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Kecamatan Sukatani adalah daerah yang geografi nya penghubung dua kota besar di pulau Jawa yaitu jakarta dan bandung melalui jalur darat dengan transportasi kereta dan memiliki stasiun Sukatani, wilayah nya dilewati jalur jalan tol Cipularang, dan jalur kereta cepat. Sukatani dikenal karena area pegunungan nya

                                            Berbatasan dengan Waduk Jatiluhur di utara dan barat, wilayah utara sukatani di mulai dari wilayah desa Cijantung , dan berbatasan dengan kecamatan Jatiluhur di timur, dan kecamatan Darangdan dan Plered di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Dodih Hamdani, S.E.</li>
                                            <li>Total : 57,687 jiwa</li>
                                            <li>Kode Pos : 41116</li>
                                            <li>Luas Wilayah : 0.07994 km²</li>
                                            <li>Desa/Kelurahan : 14</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Tegal Waru</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Tegalwaru adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat :-</li>
                                            <li>Total : 47,363 jiwa</li>
                                            <li>Kode Pos : 41165</li>
                                            <li>Luas Wilayah : 73,23 km²</li>
                                            <li>Desa/Kelurahan : 12</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Wanayasa</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Wanayasa adalah salah satu kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat. Berbatasan dengan kecamatan Cibatu di utara, kecamatan Pondoksalam di barat, kecamatan Kiarapedes di timur, dan kecamatan Bojong di selatan.

                                            Karena letaknya yang berada di ketinggian menjadikan daerah ini berhawa sejuk.
                                            
                                            Di Kecamatan Wanayasa terdapat Situ Wanayasa yang dijadikan objek wisata dan tempat memancing
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Drs. H. Dedi Kusmayadi, Ms</li>
                                            <li>Total : 34,972 jiwa</li>
                                            <li>Kode Pos : 41174</li>
                                            <li>Luas Wilayah : 54.76 km²</li>
                                            <li>Desa/Kelurahan : 15</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Babakan cikao</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>
                                            Babakancikao adalah sebuah kecamatan di Kabupaten Purwakarta, Provinsi Jawa Barat, Indonesia. Berbatasan dengan Kabupaten Karawang, kecamatan Jatiluhur di barat, kecamatan Bungursari di timur, dan kecamatan Purwakarta di selatan.
                                        </p>

                                        <ul class="list-services">
                                            <li>Camat : Rusaman Arifin, S.H., M.M</li>
                                            <li>Total : 47,172 jiwa</li>
                                            <li>Kode Pos : 41151</li>
                                            <li>Luas Wilayah : 42,40 km²</li>
                                            <li>Desa/Kelurahan : 9</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
    
                            </div> <!-- grid-list-items -->
                           

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
    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('storage') }}/assets/js/main.js"></script>

</body>
</html> 