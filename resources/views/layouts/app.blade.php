<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Kampus Patriot</title>


    <style>

        /* =============================
           RESET
        ============================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =============================
           BODY
        ============================= */

        body {
            font-family: Arial, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #edf3fb,
                    #dce7f5
                );

            color: #1f2937;
        }


        /* =============================
           NAVBAR
        ============================= */

        .navbar {
            width: 100%;

            min-height: 75px;

            padding: 0 10%;

            display: flex;
            align-items: center;

            background:
                linear-gradient(
                    90deg,
                    #102a56,
                    #1d4f91
                );

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.15);
        }


        /* LOGO */

        .navbar-logo {
            color: white;

            font-size: 19px;

            font-weight: bold;

            margin-right: 70px;

            line-height: 1.3;

            transition: 0.3s;
        }


        .navbar-logo:hover {
            transform: scale(1.05);
        }


        .navbar-logo small {
            display: block;

            font-size: 11px;

            color: #93c5fd;

            letter-spacing: 1px;
        }


        /* MENU */

        .navbar-menu {
            display: flex;

            gap: 10px;
        }


        .navbar-menu a {
            color: white;

            text-decoration: none;

            padding: 12px 20px;

            border-radius: 8px;

            transition: 0.3s;
        }


        .navbar-menu a:hover {
            background:
                rgba(255, 255, 255, 0.15);

            transform:
                translateY(-2px);
        }


        /* =============================
           HERO
        ============================= */

        .campus-hero {
            min-height: 100px;

            padding: 25px 10%;

            display: flex;
            align-items: center;

            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #1d4ed8,
                    #102a56
                );

            color: white;
        }


        /* DEKORASI */

        .campus-hero::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            border-radius: 50%;

            background:
                rgba(255, 255, 255, 0.06);

            right: -100px;
            top: -100px;
        }


        .campus-hero::after {
            content: "";

            position: absolute;

            width: 200px;
            height: 200px;

            border-radius: 50%;

            border:
                30px solid
                rgba(255, 255, 255, 0.05);

            right: 15%;
            bottom: -100px;
        }


        .hero-content {
            width: 100%;

            max-width: 1100px;

            margin: auto;

            position: relative;

            z-index: 2;

            
        }


        .campus-hero h1 {
            font-size: 48px;

            margin-bottom: 15px;
        }


        .hero-line {
            width: 80px;
            height: 5px;

            background: #7dd3fc;

            border-radius: 10px;

            margin-bottom: 22px;
        }


        .campus-hero p {
            max-width: 650px;

            font-size: 18px;

            line-height: 1.7;

            color: #e0f2fe;
        }


        /* =============================
           CONTAINER
        ============================= */

        .container,
        .page-container {
            width: 82%;

            max-width: 1100px;

            margin: 50px auto;
        }


        /* =============================
           CARD UMUM
        ============================= */

        .kotak-informasi {
            background: white;

            padding: 30px;

            margin-bottom: 22px;

            border-radius: 16px;

            border-left:
                6px solid #2563eb;

            box-shadow:
                0 8px 25px
                rgba(30, 64, 175, 0.12);

            transition: 0.3s;
        }


        .kotak-informasi:hover {
            transform:
                translateY(-5px);

            box-shadow:
                0 15px 30px
                rgba(30, 64, 175, 0.18);
        }


        .kotak-informasi h1,
        .kotak-informasi h2 {
            color: #183b72;

            margin-bottom: 15px;
        }


        .kotak-informasi h1 {
            font-size: 30px;
        }


        .kotak-informasi h2 {
            font-size: 23px;
        }


        .kotak-informasi p {
            color: #4b5563;

            line-height: 1.7;
        }


        /* =============================
           WELCOME CARD
        ============================= */

        .welcome-card {
            display: flex;

            align-items: center;

            gap: 40px;

            border-left: none;

            border-top:
                5px solid #2563eb;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #edf5ff
                );
        }


        .welcome-text {
            flex: 1;
        }


        .welcome-text h1 {
            font-size: 34px;
        }


        /* =============================
           GAMBAR
        ============================= */

        .welcome-image {
            flex: 1;

            min-width: 350px;

            position: relative;
        }


        .gambar-kampus {
            width: 100%;

            height: 350px;

            display: block;

            object-fit: cover;

            border-radius: 18px;

            box-shadow:
                0 15px 35px
                rgba(30, 64, 175, 0.25);

            border:
                6px solid white;

            transition: 0.4s;
        }


        .gambar-kampus:hover {
            transform:
                scale(1.02);
        }


        /* ICON DI GAMBAR */

        .image-badge {
            position: absolute;

            bottom: -20px;
            right: -15px;

            width: 65px;
            height: 65px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #183b72
                );

            color: white;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 28px;

            border: 5px solid white;

            box-shadow:
                0 8px 20px
                rgba(0, 0, 0, 0.2);
        }


        /* =============================
           JUDUL INFORMASI
        ============================= */

        .section-title {
            text-align: center;

            margin:
                60px 0
                35px;
        }


        .section-title span {
            color: #2563eb;

            font-weight: bold;

            font-size: 13px;

            letter-spacing: 2px;
        }


        .section-title h2 {
            font-size: 34px;

            color: #183b72;

            margin: 10px 0;
        }


        .section-title p {
            color: #64748b;
        }


        /* =============================
           INFO CARD
        ============================= */

        .info-card {
            display: flex;

            align-items: center;

            gap: 20px;

            background: white;

            padding: 25px;

            margin-bottom: 20px;

            border-radius: 15px;

            box-shadow:
                0 6px 20px
                rgba(30, 64, 175, 0.10);

            transition: 0.3s;
        }


        .info-card:hover {
            transform:
                translateY(-5px);

            box-shadow:
                0 14px 30px
                rgba(30, 64, 175, 0.18);
        }


        .info-icon {
            width: 60px;
            height: 60px;

            min-width: 60px;

            background: #e0edff;

            border-radius: 15px;

            display: flex;

            justify-content: center;
            align-items: center;

            font-size: 27px;
        }


        .info-content {
            flex: 1;
        }


        .info-content h2 {
            color: #183b72;

            margin-bottom: 8px;
        }


        .info-content p {
            color: #64748b;

            line-height: 1.6;
        }


        /* =============================
           FOOTER
        ============================= */

        .footer {
            background:
                linear-gradient(
                    90deg,
                    #102a56,
                    #183b72
                );

            color: white;

            text-align: center;

            padding: 28px;

            margin-top: 50px;

            border-top:
                3px solid #60a5fa;
        }


        /* =============================
           RESPONSIVE
        ============================= */

        @media (max-width: 768px) {

            .navbar {
                padding: 15px 7%;

                flex-direction: column;

                align-items: flex-start;
            }


            .navbar-logo {
                margin-bottom: 12px;
            }


            .navbar-menu {
                flex-wrap: wrap;
            }


            .navbar-menu a {
                padding: 25px 10px;
            }


            .campus-hero {
                padding: 25px 10%;

                min-height: 150x;
            }


            .campus-hero h1 {
                font-size: 35px;
            }


            .campus-hero p {
                font-size: 16px;
            }


            .container,
            .page-container {
                width: 90%;
            }


            .welcome-card {
                flex-direction: column;
            }


            .welcome-image {
                min-width: 100%;

                width: 100%;
            }


            .gambar-kampus {
                height: 250px;
            }


            .info-card {
                align-items: flex-start;
            }

        }
        /* =================================
   HALAMAN TENTANG
================================= */

.about-page {
    min-height: 100vh;
    background:
        linear-gradient(
            135deg,
            #e8f0fb,
            #cbd8ec
        );

    padding-bottom: 50px;
}


/* =================================
   HEADER TENTANG
================================= */

.about-header {
    background:
        linear-gradient(
            135deg,
            #1e4fa3,
            #183b72
        );

    color: white;

    padding: 65px 10%;

    position: relative;

    overflow: hidden;
}


/* DEKORASI BULAT */

.about-header::before {
    content: "";

    position: absolute;

    width: 280px;
    height: 280px;

    border-radius: 50%;

    background:
        rgba(255, 255, 255, 0.07);

    right: -70px;
    top: -100px;
}


.about-header::after {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    border-radius: 50%;

    border:
        25px solid rgba(255, 255, 255, 0.05);

    right: 180px;
    bottom: -100px;
}


.about-header-content {
    position: relative;

    z-index: 2;

    max-width: 800px;

    animation:
        munculDariAtas 0.8s ease;
}


/* LABEL */

.about-label {
    display: inline-block;

    background:
        rgba(255, 255, 255, 0.15);

    padding: 8px 16px;

    border-radius: 30px;

    font-size: 13px;

    letter-spacing: 2px;

    margin-bottom: 18px;
}


/* JUDUL */

.about-header h1 {
    font-size: 42px;

    margin-bottom: 15px;
}


/* GARIS */

.about-line {
    width: 80px;
    height: 5px;

    background:
        #7dd3fc;

    border-radius: 10px;

    margin-bottom: 20px;
}


/* PARAGRAF */

.about-header p {
    font-size: 18px;

    line-height: 1.7;

    max-width: 650px;
}


/* =================================
   CONTAINER
================================= */

.about-container {
    width: 80%;

    max-width: 1000px;

    margin:
        -30px auto 0 auto;

    position: relative;

    z-index: 3;
}


/* =================================
   CARD
================================= */

.about-card {
    background: white;

    border-radius: 16px;

    padding: 28px;

    margin-bottom: 20px;

    display: flex;

    align-items: flex-start;

    gap: 20px;

    border-left:
        6px solid #2563c7;

    box-shadow:
        0 8px 25px
        rgba(0, 0, 0, 0.10);

    opacity: 0;

    transform:
        translateY(30px);

    animation:
        munculCard 0.7s ease forwards;

    transition:
        0.3s;
}


/* ANIMASI BERURUTAN */

.about-card:nth-child(1) {
    animation-delay: 0.2s;
}


.about-card:nth-child(2) {
    animation-delay: 0.4s;
}


.about-card:nth-child(3) {
    animation-delay: 0.6s;
}


/* SAAT MOUSE DIARAHKAN */

.about-card:hover {

    transform:
        translateY(-7px);

    box-shadow:
        0 15px 35px
        rgba(0, 0, 0, 0.15);

}


/* =================================
   ICON
================================= */

.about-icon {

    width: 60px;
    height: 60px;

    min-width: 60px;

    border-radius: 50%;

    background:
        #e7f0ff;

    display: flex;

    justify-content: center;

    align-items: center;

    font-size: 28px;

}


/* =================================
   ISI CARD
================================= */

.about-content h2 {

    color:
        #183b72;

    margin-bottom:
        12px;

    font-size:
        23px;

}


.about-content p {

    color:
        #4b5563;

    line-height:
        1.7;

    margin-bottom:
        10px;

}


/* =================================
   ANIMASI
================================= */


/* HEADER MUNCUL DARI ATAS */

@keyframes munculDariAtas {

    from {

        opacity: 0;

        transform:
            translateY(-30px);

    }


    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* CARD MUNCUL DARI BAWAH */

@keyframes munculCard {

    from {

        opacity: 0;

        transform:
            translateY(35px);

    }


    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* =================================
   RESPONSIVE HP
================================= */

@media (max-width: 768px) {

    .about-header {

        padding:
            50px 8%;

    }


    .about-header h1 {

        font-size:
            30px;

    }


    .about-container {

        width:
            90%;

        margin-top:
            -20px;

    }


    .about-card {

        flex-direction:
            column;

        padding:
            22px;

    }

}
/* =================================
   ANIMASI HALAMAN BERANDA
================================= */


/* HERO MUNCUL PERLAHAN */

.campus-hero {
    animation: heroMuncul 0.8s ease;
}


@keyframes heroMuncul {

    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }

}


/* =================================
   JUDUL HERO DARI KIRI
================================= */

.hero-content h1 {
    animation: dariKiri 0.8s ease forwards;
}


.hero-content p {
    animation: dariKiri 1s ease forwards;
}


@keyframes dariKiri {

    from {
        opacity: 0;
        transform: translateX(-40px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }

}


/* =================================
   GARIS HERO
================================= */

.hero-line {
    animation: garisMuncul 1s ease forwards;
}


@keyframes garisMuncul {

    from {
        width: 0;
        opacity: 0;
    }

    to {
        opacity: 1;
    }

}


/* =================================
   KOTAK SELAMAT DATANG
================================= */

.welcome-card {

    animation: cardMuncul 0.8s ease forwards;

}


@keyframes cardMuncul {

    from {

        opacity: 0;

        transform:
            translateY(40px);

    }


    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* =================================
   GAMBAR ZOOM HALUS
================================= */

.welcome-image {

    overflow: hidden;

    border-radius: 15px;

}


.welcome-image img {

    animation:
        gambarMuncul 1.2s ease forwards;

}


@keyframes gambarMuncul {

    from {

        opacity: 0;

        transform:
            scale(0.9);

    }


    to {

        opacity: 1;

        transform:
            scale(1);

    }

}


/* HOVER GAMBAR */

.welcome-image:hover img {

    transform:
        scale(1.05);

    transition:
        0.5s;

}


/* =================================
   JUDUL INFORMASI
================================= */

.section-title {

    animation:
        munculPerlahan 1s ease;

}


@keyframes munculPerlahan {

    from {

        opacity: 0;

        transform:
            translateY(25px);

    }


    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* =================================
   CARD INFORMASI
================================= */

.info-card {

    opacity: 0;

    animation:
        infoMuncul 0.7s ease forwards;

}


/* MUNCUL BERURUTAN */

.info-card:nth-of-type(1) {
    animation-delay: 0.2s;
}


.info-card:nth-of-type(2) {
    animation-delay: 0.4s;
}


.info-card:nth-of-type(3) {
    animation-delay: 0.6s;
}


.info-card:nth-of-type(4) {
    animation-delay: 0.8s;
}


@keyframes infoMuncul {

    from {

        opacity: 0;

        transform:
            translateY(30px);

    }


    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* =================================
   HOVER CARD INFORMASI
================================= */

.info-card {

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;

}


.info-card:hover {

    transform:
        translateY(-6px);

}
/* =============================
   FITUR KAMPUS BERANDA
============================= */

.fitur-title {
    margin-top: 70px;
}


/* =============================
   GRID FITUR
============================= */

.fitur-grid {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 25px;

    margin-bottom: 60px;
}


/* =============================
   CARD FITUR
============================= */

.fitur-card {
    background: white;

    padding: 35px 25px;

    text-align: center;

    border-radius: 18px;

    border-top:
        5px solid #2563eb;

    box-shadow:
        0 8px 25px
        rgba(30, 64, 175, 0.10);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;

    animation:
        fiturMuncul 0.7s ease forwards;
}


/* =============================
   HOVER CARD
============================= */

.fitur-card:hover {
    transform:
        translateY(-8px);

    box-shadow:
        0 18px 35px
        rgba(30, 64, 175, 0.18);
}


/* =============================
   ICON FITUR
============================= */

.fitur-icon {
    width: 75px;
    height: 75px;

    margin:
        0 auto 20px;

    background:
        linear-gradient(
            135deg,
            #e0edff,
            #c7dcff
        );

    border-radius: 50%;

    display: flex;

    justify-content: center;
    align-items: center;

    font-size: 35px;
}


/* =============================
   JUDUL FITUR
============================= */

.fitur-card h3 {
    color: #183b72;

    font-size: 21px;

    margin-bottom: 12px;
}


/* =============================
   DESKRIPSI FITUR
============================= */

.fitur-card p {
    color: #64748b;

    line-height: 1.7;

    font-size: 15px;
}


/* =============================
   ANIMASI FITUR
============================= */

@keyframes fiturMuncul {

    from {
        opacity: 0;

        transform:
            translateY(30px);
    }

    to {
        opacity: 1;

        transform:
            translateY(0);
    }

}


/* ANIMASI BERURUTAN */

.fitur-card:nth-child(1) {
    animation-delay: 0.1s;
}

.fitur-card:nth-child(2) {
    animation-delay: 0.3s;
}

.fitur-card:nth-child(3) {
    animation-delay: 0.5s;
}


/* =============================
   RESPONSIVE HP
============================= */

@media (max-width: 768px) {

    .fitur-grid {

        grid-template-columns:
            1fr;

        gap: 20px;

    }

}
/* =================================
   HALAMAN INFORMASI
================================= */


/* =================================
   JUDUL BAGIAN INFORMASI
================================= */

.info-section-title {

    text-align: center;

    margin:
        60px 0
        35px;

}


.info-section-title span {

    color:
        #2563eb;

    font-size:
        13px;

    font-weight:
        bold;

    letter-spacing:
        2px;

}


.info-section-title h2 {

    color:
        #183b72;

    font-size:
        32px;

    margin:
        10px 0;

}


.info-section-title p {

    color:
        #64748b;

    line-height:
        1.7;

}


/* =================================
   GRID KATEGORI
================================= */

.kategori-grid {

    display:
        grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap:
        25px;

    margin-bottom:
        60px;

}


/* =================================
   CARD KATEGORI
================================= */

.kategori-card {

    background:
        white;

    padding:
        32px 25px;

    border-radius:
        18px;

    text-align:
        center;

    border-top:
        5px solid #2563eb;

    box-shadow:
        0 8px 25px
        rgba(30, 64, 175, 0.10);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;

    animation:
        kategoriMuncul 0.7s ease forwards;

}


/* =================================
   HOVER
================================= */

.kategori-card:hover {

    transform:
        translateY(-8px);

    box-shadow:
        0 18px 35px
        rgba(30, 64, 175, 0.18);

}


/* =================================
   ICON
================================= */

.kategori-icon {

    width:
        75px;

    height:
        75px;

    margin:
        0 auto 20px;

    border-radius:
        50%;

    background:
        linear-gradient(
            135deg,
            #e0edff,
            #c7dcff
        );

    display:
        flex;

    justify-content:
        center;

    align-items:
        center;

    font-size:
        35px;

}


/* =================================
   JUDUL KATEGORI
================================= */

.kategori-card h3 {

    color:
        #183b72;

    font-size:
        21px;

    margin-bottom:
        12px;

}


/* =================================
   DESKRIPSI
================================= */

.kategori-card p {

    color:
        #64748b;

    font-size:
        15px;

    line-height:
        1.7;

}


/* =================================
   JUDUL INFORMASI TERBARU
================================= */

.informasi-terbaru-title {

    border-top:
        1px solid
        rgba(37, 99, 235, 0.15);

    padding-top:
        55px;

}


/* =================================
   TANGGAL INFORMASI
================================= */

.tanggal-informasi {

    display:
        inline-block;

    margin-top:
        15px;

    padding:
        8px 14px;

    border-radius:
        20px;

    background:
        #e7f0ff;

    color:
        #2563c7;

    font-size:
        13px;

    font-weight:
        bold;

}


/* =================================
   ANIMASI
================================= */

@keyframes kategoriMuncul {

    from {

        opacity:
            0;

        transform:
            translateY(30px);

    }


    to {

        opacity:
            1;

        transform:
            translateY(0);

    }

}


/* ANIMASI BERURUTAN */

.kategori-card:nth-child(1) {

    animation-delay:
        0.1s;

}


.kategori-card:nth-child(2) {

    animation-delay:
        0.3s;

}


.kategori-card:nth-child(3) {

    animation-delay:
        0.5s;

}


/* =================================
   RESPONSIVE HP
================================= */

@media (max-width: 768px) {

    .kategori-grid {

        grid-template-columns:
            1fr;

    }


    .info-section-title h2 {

        font-size:
            27px;

    }

}
    </style>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="navbar-logo">

            🎓 KAMPUS

                 PATRIOT

        </div>


        <div class="navbar-menu">

            <a href="/">Beranda</a>

            <a href="/tentang">Tentang</a>

            <a href="/informasi">Informasi</a>

        </div>

    </nav>


    <!-- ISI HALAMAN -->

    @yield('content')


    <!-- FOOTER -->

    <footer class="footer">

        <p>
            © 2026 EkaNandaPutri FaizDwiLestari
        </p>

    </footer>


</body>

</html>