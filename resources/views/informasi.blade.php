@extends('layouts.app')

@section('content')

<style>

/* =========================================================
   ROOT / HALAMAN
========================================================= */

.info-page {
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

.info-header {
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


/* lingkaran dekorasi */

.info-header::before {
    content: "";
    position: absolute;

    width: 420px;
    height: 420px;

    border: 80px solid rgba(255,255,255,.06);
    border-radius: 50%;

    right: -160px;
    top: -170px;
}


.info-header::after {
    content: "";

    position: absolute;

    width: 170px;
    height: 170px;

    border: 2px solid rgba(255,255,255,.12);
    border-radius: 50%;

    left: -70px;
    bottom: -80px;
}


/* garis dekorasi */

.info-header-content {
    max-width: 1000px;
    width: 100%;
    margin: auto;

    position: relative;
    z-index: 3;
}


.info-header-content::after {
    content: "";

    position: absolute;

    width: 100px;
    height: 5px;

    background: #B9E3F2;

    border-radius: 20px;

    right: 5%;
    bottom: 10px;
}


/* label */

.info-header span {
    display: inline-block;

    font-size: 12px;
    letter-spacing: 3px;
    font-weight: 700;

    color: #CDECF7;

    margin-bottom: 12px;
}


/* judul */

.info-header h1 {
    font-size: clamp(38px, 5vw, 60px);

    line-height: 1.1;

    margin: 0 0 18px;

    font-weight: 700;

    max-width: 700px;
}


.info-header p {
    max-width: 650px;

    line-height: 1.8;

    color: #EAF6FA;

    font-size: 15px;
}


/* =========================================================
   CONTAINER
========================================================= */

.info-container {
    max-width: 1120px;

    margin: 0 auto;

    padding: 80px 25px 0;
}


/* =========================================================
   INTRO
========================================================= */

.info-intro {
    display: grid;

    grid-template-columns: .8fr 2fr;

    gap: 50px;

    align-items: end;

    margin-bottom: 45px;

    padding-bottom: 30px;

    border-bottom: 1px solid #DDE7EB;
}


.info-intro-label {

    color: #6FB6D6;

    font-size: 16px;

    letter-spacing: 5px;

    font-weight: 900;

}

.info-intro h2 {
    color: #2F4858;

    font-size: clamp(28px, 4vw, 40px);

    line-height: 1.2;

    margin-bottom: 10px;
}


.info-intro p {
    color: #71818A;

    line-height: 1.7;

    max-width: 600px;
}


/* =========================================================
   FILTER
========================================================= */

.info-filter {
    display: flex;

    justify-content: flex-start;

    gap: 10px;

    flex-wrap: wrap;

    margin-bottom: 70px;
}


.filter-button {
    border: 1px solid #DCE7EC;

    background: #FFFFFF;

    color: #60747D;

    padding: 11px 21px;

    border-radius: 30px;

    font-size: 12px;

    font-weight: 700;

    cursor: pointer;

    transition: .3s ease;

    box-shadow: 0 4px 15px rgba(47,72,88,.05);
}


.filter-button:hover {
    border-color: #6FB6D6;

    color: #2F4858;

    transform: translateY(-3px);
}


.filter-button.active {
    background: #2F4858;

    border-color: #2F4858;

    color: white;

    box-shadow:
        0 8px 20px rgba(47,72,88,.20);
}


/* =========================================================
   LIST INFORMASI
========================================================= */

.info-list {
    display: flex;

    flex-direction: column;

    gap: 70px;
}


/* =========================================================
   ITEM
========================================================= */

.info-item {
    display: grid;

    grid-template-columns: 1fr 1.15fr;

    gap: 55px;

    align-items: center;
}


/* selang-seling */

.info-item:nth-child(even) {
    direction: rtl;
}

.info-item:nth-child(even) > * {
    direction: ltr;
}


/* =========================================================
   FOTO
========================================================= */

.info-image {
    position: relative;

    height: 350px;

    overflow: hidden;

    border-radius: 40px 12px 40px 12px;

    box-shadow:
        0 18px 40px rgba(47,72,88,.13);

    transition: .5s ease;
}


.info-item:hover .info-image {
    border-radius: 12px 40px 12px 40px;

    transform: translateY(-6px);
}


.info-image::after {
    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            180deg,
            transparent 55%,
            rgba(47,72,88,.35)
        );

    pointer-events: none;
}


.info-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition: .7s ease;
}


.info-item:hover .info-image img {
    transform: scale(1.08);
}


/* =========================================================
   NOMOR
========================================================= */

.info-number {
    position: absolute;

    z-index: 5;

    margin-top: -20px;

    margin-left: -20px;

    width: 65px;
    height: 65px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #6FB6D6;

    color: white;

    border-radius: 18px 6px 18px 6px;

    font-size: 18px;

    font-weight: 700;

    box-shadow:
        0 10px 25px rgba(111,182,214,.30);

    transition: .4s ease;
}


.info-item:nth-child(even) .info-number {
    margin-left: 0;
    margin-right: -20px;
}


.info-item:hover .info-number {
    transform: rotate(-5deg) scale(1.08);

    background: #2F4858;
}


/* =========================================================
   TEXT
========================================================= */

.info-text {
    position: relative;

    padding: 15px 5px;
}


.info-label {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    color: #6FB6D6;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 15px;
}


.info-label::before {
    content: "";

    width: 25px;
    height: 2px;

    background: #6FB6D6;

    border-radius: 10px;
}


.info-content h3 {
    color: #2F4858;

    font-size: 28px;

    line-height: 1.3;

    margin-bottom: 15px;
}


.info-content p {
    color: #60747D;

    line-height: 1.9;

    font-size: 14px;

    margin-bottom: 18px;
}


.info-date {
    color: #8A989F;

    font-size: 11px;

    padding-top: 15px;

    border-top: 1px solid #DDE7EB;
}


/* =========================================================
   LINK
========================================================= */

.info-link {
    display: inline-block;

    margin-top: 18px;

    color: #2F4858;

    font-size: 13px;

    font-weight: 700;

    text-decoration: none;

    transition: .3s ease;
}


.info-link:hover {
    color: #6FB6D6;

    padding-left: 7px;
}


/* =========================================================
   EMPTY
========================================================= */

.info-empty {
    text-align: center;

    padding: 70px 25px;

    background: white;

    border-radius: 35px 12px 35px 12px;

    border: 1px solid #E2EBEF;

    box-shadow:
        0 10px 30px rgba(47,72,88,.06);
}


.info-empty h3 {
    color: #2F4858;

    margin-bottom: 10px;
}


.info-empty p {
    color: #71818A;
}


/* =========================================================
   BOTTOM
========================================================= */

.info-bottom {
    margin: 100px auto 0;

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


.info-bottom::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    border: 35px solid rgba(111,182,214,.08);

    border-radius: 50%;

    right: -70px;
    top: -80px;
}


.info-bottom h3 {
    position: relative;

    color: #2F4858;

    font-size: 27px;

    margin-bottom: 12px;
}


.info-bottom p {
    position: relative;

    color: #71818A;

    line-height: 1.7;

    margin-bottom: 25px;
}


/* =========================================================
   BUTTON
========================================================= */

.info-button {
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


.info-button:hover {
    background: #6FB6D6;

    transform: translateY(-3px);

    box-shadow:
        0 10px 20px rgba(111,182,214,.25);
}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media(max-width:850px) {

    .info-intro {
        grid-template-columns: 1fr;

        gap: 15px;
    }

    .info-item,
    .info-item:nth-child(even) {
        direction: ltr;

        grid-template-columns: 1fr;

        gap: 25px;
    }

    .info-image {
        height: 300px;
    }

    .info-number,
    .info-item:nth-child(even) .info-number {
        margin-left: -10px;
        margin-right: 0;
    }

}


/* =========================================================
   RESPONSIVE MOBILE
========================================================= */

@media(max-width:600px) {

    .info-header {
        min-height: 330px;

        padding: 55px 25px;
    }

    .info-header h1 {
        font-size: 38px;
    }

    .info-header p {
        font-size: 14px;
    }


    .info-container {
        padding: 60px 18px 0;
    }


    .info-filter {
        justify-content: flex-start;

        margin-bottom: 50px;
    }


    .filter-button {
        padding: 9px 15px;

        font-size: 11px;
    }


    .info-list {
        gap: 55px;
    }


    .info-image {
        height: 230px;

        border-radius: 28px 10px 28px 10px;
    }


    .info-number,
    .info-item:nth-child(even) .info-number {
        width: 55px;
        height: 55px;

        margin-left: -5px;

        font-size: 15px;

        border-radius: 15px 5px 15px 5px;
    }


    .info-content h3 {
        font-size: 22px;
    }


    .info-content p {
        font-size: 13px;
    }


    .info-bottom {
        margin-top: 70px;

        padding: 40px 22px;
    }


    .info-bottom h3 {
        font-size: 23px;
    }

}

</style>


<div class="info-page">


    <!-- =====================================================
         HEADER
    ====================================================== -->

    <section class="info-header">

        <div class="info-header-content">

            <span>
                UNIWARA • INFORMASI KAMPUS
            </span>

            <h1>
                Informasi Terbaru
            </h1>

            <p>
                Temukan berbagai informasi, pengumuman,
                kegiatan, dan kalender akademik terbaru
                Universitas PGRI Wiranegara.
            </p>

        </div>

    </section>



    <!-- =====================================================
         KONTEN
    ====================================================== -->

    <section class="info-container">


        <!-- INTRO -->

        <div class="info-intro scroll-animate scroll-up">

            <div>

                <span class="info-intro-label">
                    KABAR TERKINI
                </span>

            </div>

            <div>


            </div>

        </div>



        <!-- FILTER -->

        <div class="info-filter scroll-animate scroll-up">

            <button
                type="button"
                class="filter-button active"
                data-filter="semua">
                Semua
            </button>

            <button
                type="button"
                class="filter-button"
                data-filter="berita">
                Berita
            </button>

            <button
                type="button"
                class="filter-button"
                data-filter="pengumuman">
                Pengumuman
            </button>

            <button
                type="button"
                class="filter-button"
                data-filter="kegiatan">
                Kegiatan
            </button>

            <button
                type="button"
                class="filter-button"
                data-filter="kalender-akademik">
                Kalender Akademik
            </button>

        </div>



        <!-- =================================================
             LIST INFORMASI
        ================================================== -->

        <div class="info-list">

            @forelse ($informasi as $index => $item)

                @php

                    $kategori = strtolower(
                        str_replace(
                            ' ',
                            '-',
                            $item->kategori ?? 'berita'
                        )
                    );

                    $label = match ($kategori) {

                        'berita' =>
                            'BERITA',

                        'pengumuman' =>
                            'PENGUMUMAN',

                        'kegiatan' =>
                            'KEGIATAN',

                        'kalender-akademik' =>
                            'KALENDER AKADEMIK',

                        default =>
                            'INFORMASI UNIWARA',

                    };

                @endphp


                <article
                    class="info-item scroll-animate
                    {{ $index % 2 == 0 ? 'scroll-left' : 'scroll-right' }}"
                    data-kategori="{{ $kategori }}"
                >


                    <!-- FOTO -->

                    <div class="info-image">

                       <img
    src="{{ asset('image/informasi/foto'.($index+1).'.png') }}"
    alt="{{ $item->judul }}"
>

                        <div class="info-number">

                            {{ str_pad(
                                $index + 1,
                                2,
                                '0',
                                STR_PAD_LEFT
                            ) }}

                        </div>

                    </div>



                    <!-- TEKS -->

                    <div class="info-content">

                        <div class="info-text">

                            <span class="info-label">
                                {{ $label }}
                            </span>


                            <h3>
                                {{ $item->judul }}
                            </h3>


                            <p>
                                {{ $item->isi }}
                            </p>


                            <div class="info-date">
                                📅 Informasi Universitas PGRI Wiranegara
                            </div>


                            <a
                                href="#"
                                class="info-link"
                            >
                                Baca Selengkapnya →
                            </a>

                        </div>

                    </div>

                </article>


            @empty

                <div class="info-empty">

                    <h3>
                        Belum Ada Informasi
                    </h3>

                    <p>
                        Saat ini belum tersedia informasi terbaru
                        dari Universitas PGRI Wiranegara.
                    </p>

                </div>

            @endforelse

        </div>


    </section>

</div>



<script>

document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       ANIMASI SCROLL
    ===================================================== */

    const elements =
        document.querySelectorAll(".scroll-animate");


    const observer =
        new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        observer.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    elements.forEach(function (element) {

        observer.observe(element);

    });



    /* =====================================================
       FILTER KATEGORI
    ===================================================== */

    const filterButtons =
        document.querySelectorAll(".filter-button");

    const infoItems =
        document.querySelectorAll(".info-item");


    filterButtons.forEach(function (button) {

        button.addEventListener("click", function () {


            filterButtons.forEach(function (btn) {

                btn.classList.remove("active");

            });


            this.classList.add("active");


            const filter =
                this.getAttribute("data-filter");


            infoItems.forEach(function (item) {

                const kategori =
                    item.getAttribute("data-kategori");


                if (
                    filter === "semua" ||
                    kategori === filter
                ) {

                    item.style.display = "grid";

                } else {

                    item.style.display = "none";

                }

            });

        });

    });

});

</script>


@endsection