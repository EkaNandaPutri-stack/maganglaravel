@extends('layouts.app')

@section('content')

<style>

    .detail-page {
        min-height: calc(100vh - 70px);
        padding: 60px 7% 90px;
        background: #f5f8fa;
    }


    /* =========================
       CONTAINER
    ========================= */

    .detail-container {
        max-width: 950px;
        margin: 0 auto;
    }


    /* =========================
       BACK BUTTON
    ========================= */

    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        margin-bottom: 25px;

        color: #1976ed;
        text-decoration: none;

        font-size: 14px;
        font-weight: bold;

        transition: .25s ease;
    }

    .back-button:hover {
        transform: translateX(-4px);
        color: #0d4fa8;
    }


    /* =========================
       DETAIL CARD
    ========================= */

    .detail-card {
        background: white;

        border: 1px solid #e2ebef;
        border-radius: 18px;

        overflow: hidden;

        box-shadow:
            0 15px 40px rgba(47, 72, 88, .10);

        animation: detail-reveal .7s ease-out both;
    }


    @keyframes detail-reveal {

        from {
            opacity: 0;
            transform: translateY(25px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    /* =========================
       GAMBAR
    ========================= */

    .detail-image {
        width: 100%;
        height: 430px;

        object-fit: cover;
        display: block;
    }


    /* =========================
       CONTENT
    ========================= */

    .detail-content {
        padding: 40px 45px 45px;
    }


    .detail-date {
        color: #6fb6d6;

        font-size: 13px;
        font-weight: bold;

        margin-bottom: 12px;
    }


    .detail-title {
        margin: 0 0 18px;

        color: #2f4858;

        font-size: clamp(30px, 5vw, 45px);

        line-height: 1.2;
    }


    .detail-author {
        display: flex;
        align-items: center;

        gap: 8px;

        margin-bottom: 30px;

        padding-bottom: 20px;

        border-bottom: 1px solid #e2ebef;

        color: #8a989f;

        font-size: 13px;
    }


    /* =========================
       ISI BERITA
    ========================= */

    .detail-text {
        color: #52666f;

        font-size: 16px;

        line-height: 1.9;

        white-space: pre-line;
    }


    /* =========================
       FOOTER DETAIL
    ========================= */

    .detail-footer {
        margin-top: 35px;

        padding-top: 22px;

        border-top: 1px solid #e2ebef;
    }


    .detail-footer a {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 11px 18px;

        border-radius: 10px;

        background: #1976ed;

        color: white;

        text-decoration: none;

        font-size: 13px;

        font-weight: bold;

        transition: .25s ease;
    }


    .detail-footer a:hover {
        background: #125fc0;

        transform: translateY(-2px);

        box-shadow:
            0 8px 18px rgba(25,118,237,.20);
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 700px) {

        .detail-page {
            padding: 40px 18px 60px;
        }

        .detail-image {
            height: 260px;
        }

        .detail-content {
            padding: 28px 24px 32px;
        }

        .detail-title {
            font-size: 30px;
        }

        .detail-text {
            font-size: 15px;
        }

    }

</style>


<section class="detail-page">

    <div class="detail-container">


        <!-- KEMBALI -->
        <a
            href="{{ route('berita') }}"
            class="back-button"
        >

            ← Kembali ke Berita

        </a>


        <!-- DETAIL -->
        <article class="detail-card">


            <!-- GAMBAR -->
            <img
                class="detail-image"
                src="{{ $berita->gambar
                    ? (str_starts_with($berita->gambar, 'berita/')
                        ? asset('storage/'.$berita->gambar)
                        : asset($berita->gambar))
                    : asset('image/informasi/foto1.png')
                }}"
                alt="{{ $berita->judul }}"
            >


            <!-- CONTENT -->
            <div class="detail-content">


                <!-- TANGGAL -->
                <div class="detail-date">

                    {{ $berita->tanggal?->format('d F Y') }}

                </div>


                <!-- JUDUL -->
                <h1 class="detail-title">

                    {{ $berita->judul }}

                </h1>


                <!-- PENULIS -->
                @if ($berita->penulis)

                    <div class="detail-author">

                        👤

                        <span>
                            Oleh {{ $berita->penulis }}
                        </span>

                    </div>

                @endif


                <!-- ISI LENGKAP -->
                <div class="detail-text">

                    {{ $berita->isi }}

                </div>


                <!-- FOOTER -->
                <div class="detail-footer">

                    <a href="{{ route('berita') }}">

                        ← Kembali ke Daftar Berita

                    </a>

                </div>


            </div>

        </article>

    </div>

</section>

@endsection