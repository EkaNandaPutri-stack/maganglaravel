<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - UNIWARA</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #e8f2ff 0%, #d5e8ff 50%, #eef6ff 100%);
            color: #172b4d;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 230px;
            height: 100vh;
            background: linear-gradient(180deg, #073b78, #062d5c);
            color: white;
            padding: 18px 10px;
            z-index: 1000;
        }

        .logo {
            height: 48px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 10px 18px;
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }

        .logo-icon {
            width: 35px;
            height: 35px;
            background: white;
            color: #073b78;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
        }

        .logo-text {
            font-size: 14px;
            font-weight: bold;
        }

        /* MENU */
        .menu {
            margin-top: 20px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: rgba(255,255,255,0.9);
            padding: 11px 12px;
            border-radius: 8px;
            margin-bottom: 5px;
            font-size: 13px;
            transition: all 0.25s ease;
        }

        .menu a:hover {
            background: rgba(255,255,255,0.12);
            transform: translateX(3px);
        }

        .menu a.active {
            background: #1976e8;
            color: white;
            box-shadow: 0 5px 12px rgba(0,0,0,0.12);
        }

        .menu-icon {
            width: 20px;
            text-align: center;
            font-size: 15px;
        }

        /* LOGOUT */
        .logout {
            position: absolute;
            bottom: 20px;
            left: 10px;
            right: 10px;
        }

        .logout button {
            width: 100%;
            background: transparent;
            border: none;
            color: white;
            text-align: left;
            padding: 11px 12px;
            cursor: pointer;
            font-size: 13px;
            border-radius: 7px;
            transition: 0.2s;
        }

        .logout button:hover {
            background: rgba(255,255,255,0.1);
        }

        /* MAIN */
        .main {
            margin-left: 230px;
            min-height: 100vh;
            background: linear-gradient(135deg, #e8f2ff 0%, #d5e8ff 50%, #eef6ff 100%);
        }

        /* TOPBAR */
        .topbar {
            height: 60px;
            background: white;
            border-bottom: 1px solid #dfe7f1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            box-shadow: 0 2px 8px rgba(31,68,110,0.04);
        }

        .hamburger {
            font-size: 21px;
            color: #34495e;
        }

.profile {
    display:flex;
    align-items:center;
    gap:10px;
    font-size:13px;
}


.avatar {

    width:34px;
    height:34px;

    border-radius:50%;

    overflow:hidden;

    flex-shrink:0;

}


.avatar img{

    width:100%;
    height:100%;

    object-fit:cover;

}
        

        /* CONTENT */
      .content{

    padding:30px;

    margin-left:0;


}

        .welcome {
            margin-bottom: 22px;
        }

        .welcome h1 {
            font-size: 25px;
            margin-bottom: 7px;
            color: #12345f;
        }

        .welcome p {
            color: #617995;
            font-size: 12px;
            line-height: 1.6;
        }

        /* QUICK CARDS */
        .quick-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin-bottom: 20px;
        }

        .quick-card {
            background: white;
            border: 1px solid #dce6f1;
            border-radius: 12px;
            padding: 17px;
            min-height: 145px;
            position: relative;
            transition: all 0.25s ease;
            color: inherit;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(30,72,118,0.05);
        }

        .quick-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(30,72,118,0.12);
            border-color: #bdd7f5;
        }

        .quick-icon {
            width: 43px;
            height: 43px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 12px;
        }

        .blue {
            background: #e5f1ff;
            color: #1674db;
        }

        .green {
            background: #e3f7ef;
            color: #18a36b;
        }

        .purple {
            background: #f0e7ff;
            color: #8b5be8;
        }

        .orange {
            background: #fff0e3;
            color: #f28b36;
        }

        .quick-card h3 {
            font-size: 12px;
            margin-bottom: 8px;
            color: #182f4d;
        }

        .quick-card p {
            font-size: 10px;
            color: #718096;
            line-height: 1.5;
            padding-right: 10px;
        }

        .arrow {
            position: absolute;
            right: 15px;
            bottom: 13px;
            color: #1976e8;
            font-size: 18px;
            transition: 0.2s;
        }

        .quick-card:hover .arrow {
            transform: translateX(4px);
        }

        /* SUMMARY */
        .summary {
            background: white;
            border: 1px solid #dce6f1;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 14px rgba(30,72,118,0.05);
        }

        .summary-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #183452;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
        }

        .summary-card {
            background: #fbfdff;
            border: 1px solid #e1e9f2;
            border-radius: 9px;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 11px;
            transition: 0.2s;
        }

        .summary-card:hover {
            transform: translateY(-2px);
            border-color: #c9dcf1;
            box-shadow: 0 5px 14px rgba(30,72,118,0.06);
        }

        .summary-icon {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .summary-label {
            font-size: 9px;
            color: #718096;
            margin-bottom: 4px;
        }

        .summary-number {
            font-size: 18px;
            font-weight: bold;
            color: #172b4d;
        }

        /* RESPONSIVE */
        @media (max-width: 1100px) {
            .quick-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .summary-cards {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 190px;
            }

            .main {
                margin-left: 190px;
            }

            .quick-cards,
            .summary-cards {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 20px;
            }
        }
 /* =====================================
   ANIMASI DASHBOARD SMOOTH
===================================== */


/* halaman masuk */

.content{

    animation: pageFade .6s ease;

}


@keyframes pageFade{

    from{

        opacity:0;
        transform:translateY(15px);

    }

    to{

        opacity:1;
        transform:translateY(0);

    }

}



/* welcome */

.welcome{

    animation: welcomeSlide .7s ease;

}



@keyframes welcomeSlide{

    from{

        opacity:0;
        transform:translateX(-25px);

    }

    to{

        opacity:1;
        transform:translateX(0);

    }

}



/* card dashboard */

.quick-card{

    opacity:0;

    animation: cardSmooth .6s ease forwards;

}



/* urutan card */

.quick-card:nth-child(1){

    animation-delay:.1s;

}


.quick-card:nth-child(2){

    animation-delay:.2s;

}


.quick-card:nth-child(3){

    animation-delay:.3s;

}


.quick-card:nth-child(4){

    animation-delay:.4s;

}


.quick-card:nth-child(5){

    animation-delay:.5s;

}



@keyframes cardSmooth{


    from{

        opacity:0;

        transform:
        translateY(25px)
        scale(.97);

    }


    to{

        opacity:1;

        transform:
        translateY(0)
        scale(1);

    }

}



/* hover card */

.quick-card{

    transition:
    transform .3s ease,
    box-shadow .3s ease;

}



.quick-card:hover{

    transform:
    translateY(-6px);

    box-shadow:
    0 15px 30px rgba(30,72,118,.15);

}



/* icon */

.quick-icon{

    transition:.3s ease;

}


.quick-card:hover .quick-icon{

    transform:
    scale(1.1)
    rotate(5deg);

}



/* panah */

.arrow{

    transition:.3s ease;

}


.quick-card:hover .arrow{

    transform:
    translateX(6px);

}



/* summary bawah */

.summary{

    animation:

    summaryShow .8s ease;

}



@keyframes summaryShow{


    from{

        opacity:0;

        transform:
        translateY(30px);

    }


    to{

        opacity:1;

        transform:
        translateY(0);

    }


}
/* DROPDOWN PROFILE */

.profile-menu{
    position:relative;
}


.profile-dropdown{

    position:absolute;

    right:25px;
    top:65px;

    width:260px;

    background:white;

    border-radius:15px;

    padding:20px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.15);

    z-index:999;


    opacity:0;

    visibility:hidden;

    transform:translateY(-15px);

    transition:.3s ease;

}


.profile-dropdown.active{

    opacity:1;

    visibility:visible;

    transform:translateY(0);

}



.profile-dropdown h4{

    margin:0;

    color:#17345f;

    font-size:16px;

}


.profile-dropdown p{

    margin:5px 0;

    color:#718096;

    font-size:12px;

}



.profile-dropdown hr{

    border:none;

    border-top:1px solid #eee;

    margin:15px 0;

}



.profile-dropdown a{

    display:block;

    padding:10px;

    text-decoration:none;

    color:#17345f;

    border-radius:8px;

    font-size:14px;

}



.profile-dropdown a:hover{

    background:#eef5ff;

}
.avatar{
    position:relative;
}


.change-photo{

    position:absolute;

    bottom:0;

    right:0;

    width:32px;

    height:32px;

    background:#1976e8;

    color:white;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:22px;

    font-weight:bold;

    text-decoration:none;

    border:3px solid white;

    cursor:pointer;

    transition:.3s;

}


.change-photo:hover{

    transform:scale(1.1);

    background:#125bb5;

}
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
        

            <div class="logo-text">
                ADMIN UNIWARA
            </div>
        </div>

        <div class="menu">

            <!-- DASHBOARD -->
            <a href="{{ route('admin.dashboard') }}" class="active">
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>

            <!-- BERITA -->
            <a href="{{ route('admin.berita.index') }}">
                <span class="menu-icon">📰</span>
                Berita
            </a>

            <!-- PENGUMUMAN -->
            <a href="{{ route('admin.pengumuman.index') }}">
                <span class="menu-icon">📢</span>
                Pengumuman
            </a>

            <!-- KEGIATAN -->
            <a href="{{ route('admin.kegiatan.index') }}">
                <span class="menu-icon">🎯</span>
                Kegiatan
            </a>


            <!-- FAKULTAS & PRODI -->
            <a href="{{ route('admin.fakultas.index') }}">
                <span class="menu-icon">🏫</span>
                Fakultas & Prodi
            </a>

        </div>

        <!-- LOGOUT -->
        <div class="logout">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button type="submit">
                    ⇥ &nbsp;&nbsp; Logout
                </button>
            </form>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <header class="topbar">

            <div class="hamburger">
                ☰
            </div>

       <div class="profile" onclick="toggleProfile()">

    <div class="avatar">

@if(auth()->user()->foto)

<img src="{{ asset('storage/'.auth()->user()->foto) }}" 
alt="Foto Profil">

@else

{{ strtoupper(substr(auth()->user()->name,0,1)) }}

@endif



</div>
<div class="profile-dropdown" id="profileDropdown">

    <h4>
        {{ auth()->user()->name }}
    </h4>

    <p>
        Admin UNIWARA
    </p>

    <hr>

    <a href="{{ route('admin.profile') }}">
    👤 Profil Saya
</a>


</div>
    <span>
        {{ auth()->user()->name }}
    </span>

    <span>
        ⌄
    </span>

</div>

        </header>


        <!-- CONTENT -->
        <section class="content">

            <!-- WELCOME -->
            <div class="welcome">

                <h1>
                    Halo, {{ auth()->user()->name }} 👋
                </h1>

                <p>
                    Selamat datang di sistem informasi akademik UNIWARA.
                    Kelola data dan informasi kampus dengan mudah.
                </p>

            </div>


            <!-- QUICK CARDS -->
            <div class="quick-cards">

                <!-- BERITA -->
                <a class="quick-card"
                   href="{{ route('admin.berita.index') }}">

                    <div class="quick-icon blue">
                        📰
                    </div>

                    <h3>
                        Kelola Berita
                    </h3>

                    <p>
                        Tambah, edit, dan hapus berita kampus.
                    </p>

                    <div class="arrow">
                        →
                    </div>

                </a>


                <!-- PENGUMUMAN -->
                <a class="quick-card"
                   href="{{ route('admin.pengumuman.index') }}">

                    <div class="quick-icon green">
                        📢
                    </div>

                    <h3>
                        Kelola Pengumuman
                    </h3>

                    <p>
                        Buat dan kelola pengumuman terbaru.
                    </p>

                    <div class="arrow">
                        →
                    </div>

                </a>


                <!-- KEGIATAN -->
                <a class="quick-card"
                   href="{{ route('admin.kegiatan.index') }}">

                    <div class="quick-icon purple">
                        🎯
                    </div>

                    <h3>
                        Kelola Kegiatan
                    </h3>

                    <p>
                        Tambah dan kelola kegiatan kampus.
                    </p>

                    <div class="arrow">
                        →
                    </div>

                </a>


                <!-- FAKULTAS & PRODI -->
                <a class="quick-card"
                   href="{{ route('admin.fakultas.index') }}">

                    <div class="quick-icon orange">
                        🏫
                    </div>

                    <h3>
                        Kelola Fakultas & Prodi
                    </h3>

                    <p>
                        Tambah fakultas, program studi,
                        kuota mahasiswa, dan jumlah kelas.
                    </p>

                    <div class="arrow">
                        →
                    </div>

                </a>

            </div>


            <!-- SUMMARY -->
            <div class="summary">

                <div class="summary-title">
                    Informasi Singkat
                </div>

                <div class="summary-cards">

                    <!-- BERITA -->
                    <div class="summary-card">

                        <div class="summary-icon blue">
                            📰
                        </div>

                        <div>
                            <div class="summary-label">
                                Total Berita
                            </div>

                            <div class="summary-number">
                                {{ $jumlahBerita }}
                            </div>
                        </div>

                    </div>


                    <!-- PENGUMUMAN -->
                    <div class="summary-card">

                        <div class="summary-icon green">
                            📢
                        </div>

                        <div>
                            <div class="summary-label">
                                Total Pengumuman
                            </div>

                            <div class="summary-number">
                                {{ $jumlahPengumuman }}
                            </div>
                        </div>

                    </div>



                    <!-- KEGIATAN -->
                    <div class="summary-card">

                        <div class="summary-icon purple">
                            🎯
                        </div>

                        <div>
                            <div class="summary-label">
                                Total Kegiatan
                            </div>

                            <div class="summary-number">
                                {{ $jumlahKegiatan }}
                            </div>
                        </div>

                    </div>


                    <!-- FAKULTAS & PRODI -->
                    <div class="summary-card">

                        <div class="summary-icon orange">
                            🏫
                        </div>

                        <div>
                            <div class="summary-label">
                                Fakultas & Prodi
                            </div>

                            <div class="summary-number">
                                {{ $jumlahFakultas ?? 0 }} / {{ $jumlahProdi ?? 0 }}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>
<script>

function toggleProfile(){

    document
    .getElementById("profileDropdown")
    .classList.toggle("active");

}

</script>
</body>

</html>