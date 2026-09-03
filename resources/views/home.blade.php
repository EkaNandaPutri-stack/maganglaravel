@extends('layouts.app')

@section('content')


    <!-- =========================
         HERO
    ========================= -->

    <section class="campus-hero">

        <div class="hero-content">

            <h1>
                <marquee scrollamount="25">
                    UNIVERSITAS PGRI WIRANEGARA
                </marquee>
            </h1>

            <div class="hero-line"></div>

        </div>

    </section>



    <!-- =========================
         CONTENT
    ========================= -->

    <div class="container">


        <!-- =========================
             SELAMAT DATANG + GAMBAR
        ========================= -->

        <div class="kotak-informasi welcome-card">


            <!-- TEXT -->

            <div class="welcome-text">

                <h1>
                    Selamat Datang di Kampus Kami
                </h1>

                <p>
                    Kampus Patriot merupakan tempat untuk
                    belajar, berkembang, dan berinovasi.
                </p>

                <br>

                <p>
                    Kami berkomitmen untuk mempersiapkan generasi
                    muda yang kreatif, kompeten, dan siap menghadapi
                    tantangan masa depan.
                </p>

            </div>



            <!-- GAMBAR -->

            <div class="welcome-image">

                <img
                    src="{{ asset('image/uniwara.jpeg') }}"
                    alt="Kampus Uniwara"
                    class="gambar-kampus"
                >

                <div class="image-badge">
                    🎓
                </div>

            </div>


        </div>



        <!-- =========================
             JUDUL KEUNGGULAN
        ========================= -->

        <div class="section-title fitur-title">

            <span>
                KEUNGGULAN KAMPUS
            </span>

            <h2>
                Mengapa Memilih Kampus Kami?
            </h2>

            <p>
                Bersama Universitas PGRI Wiranegara,
                wujudkan masa depan yang lebih baik.
            </p>

        </div>



        <!-- =========================
             3 FITUR KAMPUS
        ========================= -->

        <div class="fitur-grid">


            <!-- FITUR 1 -->

            <div class="fitur-card">

                <div class="fitur-icon">
                    🎓
                </div>

                <h3>
                    Pendidikan Berkualitas
                </h3>

                <p>
                    Proses pembelajaran yang mendukung
                    perkembangan akademik dan keterampilan
                    mahasiswa.
                </p>

            </div>



            <!-- FITUR 2 -->

            <div class="fitur-card">

                <div class="fitur-icon">
                    💡
                </div>

                <h3>
                    Inovasi & Kreativitas
                </h3>

                <p>
                    Mengembangkan potensi mahasiswa agar
                    kreatif, inovatif, dan siap menghadapi
                    masa depan.
                </p>

            </div>



            <!-- FITUR 3 -->

            <div class="fitur-card">

                <div class="fitur-icon">
                    🏫
                </div>

                <h3>
                    Lingkungan Kampus
                </h3>

                <p>
                    Lingkungan belajar yang nyaman untuk
                    mendukung kegiatan akademik dan
                    aktivitas mahasiswa.
                </p>

            </div>


        </div>


    </div>


@endsection