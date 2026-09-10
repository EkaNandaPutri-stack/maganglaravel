@extends('layouts.app')

@section('content')

<style>

/* =========================================================
   ROOT
========================================================= */

.program-page {
    background: #F5F8FA;
    min-height: 100vh;
    padding-bottom: 90px;
    overflow: hidden;
}


/* =========================================================
   ANIMASI
========================================================= */

.scroll-animate {
    opacity: 0;
    transition:
        opacity .8s ease,
        transform .8s ease;
}

.scroll-up {
    transform: translateY(50px);
}

.scroll-left {
    transform: translateX(-70px);
}

.scroll-right {
    transform: translateX(70px);
}

.scroll-animate.show {
    opacity: 1;
    transform: translate(0, 0);
}


/* =========================================================
   HEADER
========================================================= */

.program-header {
    min-height: 390px;

    display: flex;
    align-items: center;

    position: relative;
    overflow: hidden;

    background:
        linear-gradient(
            120deg,
            #2F4858 0%,
            #365B70 55%,
            #6FB6D6 100%
        );

    color: white;

    padding: 70px 8%;
}


/* Lingkaran kanan */

.program-header::before {
    content: "";

    position: absolute;

    width: 420px;
    height: 420px;

    border: 80px solid rgba(255,255,255,.06);

    border-radius: 50%;

    right: -160px;
    top: -170px;
}


/* Lingkaran kiri */

.program-header::after {
    content: "";

    position: absolute;

    width: 170px;
    height: 170px;

    border: 2px solid rgba(255,255,255,.12);

    border-radius: 50%;

    left: -70px;
    bottom: -80px;
}


/* HEADER CONTENT */

.program-header-content {
    max-width: 1000px;

    width: 100%;

    margin: auto;

    position: relative;

    z-index: 3;
}


/* Garis */

.program-header-content::after {
    content: "";

    position: absolute;

    width: 100px;
    height: 5px;

    background: #B9E3F2;

    border-radius: 20px;

    right: 5%;
    bottom: 10px;
}


/* Label */

.program-label {
    display: inline-block;

    font-size: 12px;

    letter-spacing: 3px;

    font-weight: 700;

    color: #CDECF7;

    margin-bottom: 12px;
}


/* Judul */

.program-header h1 {
    font-size: clamp(38px, 5vw, 60px);

    line-height: 1.1;

    margin: 0 0 18px;

    font-weight: 700;

    max-width: 750px;

    color: white;
}


/* Deskripsi */

.program-header p {
    max-width: 650px;

    line-height: 1.8;

    color: #EAF6FA;

    font-size: 15px;

    margin: 0;
}


/* =========================================================
   CONTAINER
========================================================= */

.program-container {
    max-width: 1120px;

    margin: 0 auto;

    padding: 80px 25px 0;
}


/* =========================================================
   INTRO
========================================================= */

.program-intro {

    display: grid;

    grid-template-columns: .8fr 2fr;

    gap: 50px;

    align-items: end;

    margin-bottom: 45px;

    padding-bottom: 30px;

    border-bottom: 1px solid #DDE7EB;
}


.program-intro-label {

    color: #6FB6D6;

    font-size: 16px;

    letter-spacing: 5px;

    font-weight: 900;
}


.program-intro h2 {

    color: #2F4858;

    font-size: clamp(28px, 4vw, 40px);

    line-height: 1.2;

    margin: 0 0 10px;
}


.program-intro p {

    color: #71818A;

    line-height: 1.7;

    max-width: 650px;

    margin: 0;
}


/* =========================================================
   DAFTAR FAKULTAS
========================================================= */

.fakultas-list {

    display: flex;

    flex-direction: column;

    gap: 30px;
}


/* =========================================================
   FAKULTAS CARD
========================================================= */

.fakultas-box {

    background: white;

    border: 1px solid #E1EBEF;

    border-radius: 35px 12px 35px 12px;

    overflow: hidden;

    box-shadow:
        0 12px 35px rgba(47,72,88,.07);

    transition: .4s ease;
}


.fakultas-box:hover {

    transform: translateY(-5px);

    box-shadow:
        0 20px 45px rgba(47,72,88,.12);
}


/* =========================================================
   FAKULTAS HEADER
========================================================= */

.fakultas-title {

    padding: 27px 35px;

    background:
        linear-gradient(
            135deg,
            #2F4858,
            #365B70
        );

    color: white;

    cursor: pointer;

    display: flex;

    justify-content: space-between;

    align-items: center;

    font-size: 20px;

    font-weight: 700;

    transition: .3s ease;
}


.fakultas-title:hover {

    background:
        linear-gradient(
            135deg,
            #365B70,
            #6FB6D6
        );
}


.fakultas-title span {

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: rgba(255,255,255,.12);

    transition: .4s ease;

    font-size: 15px;
}


.fakultas-box.active
.fakultas-title span {

    transform: rotate(180deg);

    background: #6FB6D6;
}


/* =========================================================
   CONTENT FAKULTAS
========================================================= */

.fakultas-content {

    max-height: 0;

    overflow: hidden;

    transition:
        max-height .5s ease;
}


.fakultas-box.active
.fakultas-content {

    max-height: 700px;
}


/* =========================================================
   PRODI
========================================================= */

.prodi-item {

    padding: 22px 35px;

    border-bottom: 1px solid #E8EFF2;

    cursor: pointer;

    display: flex;

    justify-content: space-between;

    align-items: center;

    transition: .3s ease;

    background: white;
}


.prodi-item:last-child {

    border-bottom: none;
}


.prodi-item:hover {

    background: #F1F9FC;

    padding-left: 45px;
}


.prodi-name {

    display: flex;

    align-items: center;

    gap: 15px;
}


.prodi-icon {

    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #EAF6FA;

    color: #6FB6D6;

    border-radius: 14px 5px 14px 5px;

    font-size: 18px;

    transition: .3s ease;
}


.prodi-item:hover
.prodi-icon {

    background: #6FB6D6;

    color: white;

    transform: rotate(-5deg);
}


.prodi-item b {

    color: #2F4858;

    font-size: 15px;
}


.prodi-arrow {

    width: 35px;

    height: 35px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #6FB6D6;

    background: #F5F8FA;

    transition: .3s ease;
}


.prodi-item:hover
.prodi-arrow {

    background: #2F4858;

    color: white;

    transform: translateX(5px);
}


/* =========================================================
   MODAL
========================================================= */

.modal {

    display: none;

    position: fixed;

    inset: 0;

    background: rgba(47,72,88,.65);

    align-items: center;

    justify-content: center;

    z-index: 9999;

    padding: 20px;
}


.modal-card {

    position: relative;

    background: white;

    width: 100%;

    max-width: 500px;

    padding: 40px;

    border-radius: 35px 12px 35px 12px;

    box-shadow:
        0 25px 70px rgba(0,0,0,.20);

    animation: zoom .4s ease;
}


.close {

    position: absolute;

    right: 25px;

    top: 20px;

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #F1F6F8;

    color: #2F4858;

    font-size: 25px;

    cursor: pointer;

    transition: .3s ease;
}


.close:hover {

    background: #2F4858;

    color: white;

    transform: rotate(90deg);
}


.modal-label {

    color: #6FB6D6;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 12px;

    display: block;
}


.modal-card h2 {

    color: #2F4858;

    font-size: 27px;

    line-height: 1.3;

    margin: 0 35px 25px 0;
}


.detail {

    margin-top: 20px;
}


.detail div {

    padding: 16px;

    border-bottom: 1px solid #E5EDF0;

    color: #71818A;

    display: flex;

    justify-content: space-between;

    gap: 20px;
}


.detail div:last-child {

    border-bottom: none;
}


.detail b {

    color: #2F4858;
}


/* =========================================================
   BOTTOM
========================================================= */

.program-bottom {

    margin: 90px auto 0;

    padding: 55px 35px;

    max-width: 900px;

    text-align: center;

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #EAF6FA,
            #F8FBFC
        );

    border-radius: 40px 12px 40px 12px;

    border: 1px solid #DDEBF0;
}


.program-bottom::before {

    content: "";

    position: absolute;

    width: 180px;

    height: 180px;

    border: 35px solid rgba(111,182,214,.08);

    border-radius: 50%;

    right: -70px;

    top: -80px;
}


.program-bottom h3 {

    position: relative;

    color: #2F4858;

    font-size: 27px;

    margin-bottom: 12px;
}


.program-bottom p {

    position: relative;

    color: #71818A;

    line-height: 1.7;

    margin-bottom: 25px;
}


.program-button {

    position: relative;

    display: inline-block;

    background: #2F4858;

    color: white;

    padding: 13px 27px;

    border-radius: 30px;

    font-size: 12px;

    font-weight: 700;

    text-decoration: none;

    transition: .3s ease;
}


.program-button:hover {

    background: #6FB6D6;

    transform: translateY(-3px);

    box-shadow:
        0 10px 20px rgba(111,182,214,.25);
}


/* =========================================================
   ANIMASI
========================================================= */

@keyframes zoom {

    from {

        transform: scale(.7);

        opacity: 0;
    }

    to {

        transform: scale(1);

        opacity: 1;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:850px) {

    .program-intro {

        grid-template-columns: 1fr;

        gap: 15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px) {

    .program-header {

        min-height: 330px;

        padding: 55px 25px;
    }


    .program-header h1 {

        font-size: 38px;
    }


    .program-header p {

        font-size: 14px;
    }


    .program-container {

        padding: 60px 18px 0;
    }


    .fakultas-title {

        padding: 22px;

        font-size: 16px;

        gap: 15px;
    }


    .fakultas-title span {

        flex-shrink: 0;

        width: 34px;

        height: 34px;
    }


    .prodi-item {

        padding: 18px;
    }


    .prodi-item:hover {

        padding-left: 23px;
    }


    .prodi-name {

        gap: 10px;
    }


    .prodi-icon {

        width: 37px;

        height: 37px;

        font-size: 15px;

        flex-shrink: 0;
    }


    .prodi-item b {

        font-size: 13px;

        line-height: 1.4;
    }


    .modal-card {

        padding: 30px 22px;
    }


    .modal-card h2 {

        font-size: 22px;
    }


    .detail div {

        font-size: 13px;
    }


    .program-bottom {

        margin-top: 70px;

        padding: 40px 22px;
    }


    .program-bottom h3 {

        font-size: 23px;
    }

}

</style>

<div class="program-page">

```
<!-- =====================================================
     HEADER
====================================================== -->

<section class="program-header">

    <div class="program-header-content">

        <span class="program-label">
            UNIWARA • PROGRAM AKADEMIK
        </span>

        <h1>
            Program Studi
        </h1>

        <p>
            Kenali fakultas dan program studi
            Universitas PGRI Wiranegara yang
            mendukung perjalanan akademik dan
            masa depan Anda.
        </p>

    </div>

</section>



<!-- =====================================================
     CONTENT
====================================================== -->

<section class="program-container">


    <!-- INTRO -->

    <div class="program-intro scroll-animate scroll-up">

        <div>

            <span class="program-intro-label">
                AKADEMIK
            </span>

        </div>

        <div>

            <h2>
                Fakultas & Program Studi
            </h2>

            <p>
                Jelajahi berbagai fakultas dan program
                studi yang tersedia di Universitas PGRI
                Wiranegara. Klik fakultas untuk melihat
                program studi yang tersedia.
            </p>

        </div>

    </div>



    <!-- =================================================
         FAKULTAS
    ================================================== -->

    <div class="fakultas-list">


        <!-- FPP -->

        <div class="fakultas-box scroll-animate scroll-left">

            <div
                class="fakultas-title"
                onclick="openFakultas(this)"
            >

                <div>
                    🎓 Fakultas Pedagogi & Psikologi (FPP)
                </div>

                <span>
                    ▼
                </span>

            </div>


            <div class="fakultas-content">


                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Bahasa dan Sastra Indonesia',
                        '120 Mahasiswa',
                        '4 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            📚
                        </div>

                        <b>
                            Pendidikan Bahasa dan Sastra Indonesia
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Bahasa Inggris',
                        '120 Mahasiswa',
                        '4 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            🌐
                        </div>

                        <b>
                            Pendidikan Bahasa Inggris
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Matematika',
                        '100 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            📐
                        </div>

                        <b>
                            Pendidikan Matematika
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Pancasila dan Kewarganegaraan',
                        '80 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            🇮🇩
                        </div>

                        <b>
                            Pendidikan Pancasila dan Kewarganegaraan
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>


            </div>

        </div>



        <!-- FTS -->

        <div class="fakultas-box scroll-animate scroll-right">

            <div
                class="fakultas-title"
                onclick="openFakultas(this)"
            >

                <div>
                    💻 Fakultas Teknologi & Sains (FTS)
                </div>

                <span>
                    ▼
                </span>

            </div>


            <div class="fakultas-content">


                <div
                    class="prodi-item"
                    onclick="detail(
                        'Ilmu Komputer',
                        '150 Mahasiswa',
                        '5 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            💻
                        </div>

                        <b>
                            Ilmu Komputer
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Teknik Industri',
                        '120 Mahasiswa',
                        '4 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            ⚙️
                        </div>

                        <b>
                            Teknik Industri
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Teknologi Pangan',
                        '90 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            🧪
                        </div>

                        <b>
                            Teknologi Pangan
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>


            </div>

        </div>



        <!-- FAI -->

        <div class="fakultas-box scroll-animate scroll-left">

            <div
                class="fakultas-title"
                onclick="openFakultas(this)"
            >

                <div>
                    ☪ Fakultas Agama Islam (FAI)
                </div>

                <span>
                    ▼
                </span>

            </div>


            <div class="fakultas-content">


                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Agama Islam',
                        '100 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            📖
                        </div>

                        <b>
                            Pendidikan Agama Islam
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Guru Madrasah Ibtidaiyah',
                        '80 Mahasiswa',
                        '2 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            👩‍🏫
                        </div>

                        <b>
                            Pendidikan Guru Madrasah Ibtidaiyah
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>


            </div>

        </div>



        <!-- FEB -->

        <div class="fakultas-box scroll-animate scroll-right">

            <div
                class="fakultas-title"
                onclick="openFakultas(this)"
            >

                <div>
                    💼 Fakultas Ekonomi & Bisnis (FEB)
                </div>

                <span>
                    ▼
                </span>

            </div>


            <div class="fakultas-content">


                <div
                    class="prodi-item"
                    onclick="detail(
                        'Ekonomi Syariah',
                        '100 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            💰
                        </div>

                        <b>
                            Ekonomi Syariah
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Manajemen Bisnis Syariah',
                        '120 Mahasiswa',
                        '4 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            📊
                        </div>

                        <b>
                            Manajemen Bisnis Syariah
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>



                <div
                    class="prodi-item"
                    onclick="detail(
                        'Pendidikan Ekonomi',
                        '100 Mahasiswa',
                        '3 Kelas'
                    )"
                >

                    <div class="prodi-name">

                        <div class="prodi-icon">
                            📈
                        </div>

                        <b>
                            Pendidikan Ekonomi
                        </b>

                    </div>

                    <div class="prodi-arrow">
                        →
                    </div>

                </div>


            </div>

        </div>


    </div>



    <!-- =================================================
         BOTTOM
    ================================================== -->

    <div class="program-bottom scroll-animate scroll-up">



        <a
            href="/"
            class="program-button"
        >
            Kembali ke Beranda →
        </a>

    </div>


</section>
```

</div>

<!-- =====================================================
     MODAL DETAIL
====================================================== -->

<div
    class="modal"
    id="modal"
>

```
<div class="modal-card">

    <span
        class="close"
        onclick="closeModal()"
    >
        ×
    </span>


    <span class="modal-label">
        DETAIL PROGRAM STUDI
    </span>


    <h2 id="namaProdi"></h2>


    <div class="detail">

        <div>

            <span>
                Kuota Mahasiswa
            </span>

            <b id="kuota"></b>

        </div>


        <div>

            <span>
                Jumlah Kelas
            </span>

            <b id="kelas"></b>

        </div>

    </div>

</div>
```

</div>

<script>

/* =========================================================
   DROPDOWN FAKULTAS
========================================================= */

function openFakultas(el) {

    const box =
        el.parentElement;

    box.classList.toggle('active');

}


/* =========================================================
   MODAL DETAIL
========================================================= */

function detail(
    nama,
    kuota,
    kelas
) {

    document.getElementById(
        'namaProdi'
    ).innerHTML = nama;


    document.getElementById(
        'kuota'
    ).innerHTML = kuota;


    document.getElementById(
        'kelas'
    ).innerHTML = kelas;


    document.getElementById(
        'modal'
    ).style.display = 'flex';

}


/* =========================================================
   CLOSE MODAL
========================================================= */

function closeModal() {

    document.getElementById(
        'modal'
    ).style.display = 'none';

}


/* =========================================================
   CLOSE KETIKA KLIK LUAR MODAL
========================================================= */

window.addEventListener(
    'click',
    function(event) {

        const modal =
            document.getElementById('modal');

        if (event.target === modal) {

            closeModal();

        }

    }
);


/* =========================================================
   ANIMASI SCROLL
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function() {

        const elements =
            document.querySelectorAll(
                '.scroll-animate'
            );


        const observer =
            new IntersectionObserver(
                function(entries) {

                    entries.forEach(
                        function(entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    'show'
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },
                {
                    threshold: 0.12
                }
            );


        elements.forEach(
            function(element) {

                observer.observe(element);

            }
        );

    }
);

</script>

@endsection
