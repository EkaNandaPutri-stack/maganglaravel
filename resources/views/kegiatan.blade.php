@extends('layouts.app')
@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')

<style>

    .activity-page {
        min-height: calc(100vh - 70px);
        padding: 64px 7% 90px;
        background: #f5f8fa;
    }

    .activity-header {
        max-width: 760px;
        margin: 0 auto 42px;
        text-align: center;
        animation: activity-reveal .7s ease-out both;
    }

    .activity-eyebrow {
        color: #6fb6d6;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 3px;
    }

    .activity-header h1 {
        margin: 12px 0;
        color: #2f4858;
        font-size: clamp(32px, 5vw, 52px);
    }

    .activity-header p {
        color: #60747d;
        line-height: 1.7;
    }

    .activity-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        max-width: 1180px;
        margin: 0 auto;
    }

    .activity-card {
        overflow: hidden;
        background: white;
        border: 1px solid #e2ebef;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(47,72,88,.07);
        animation: activity-reveal .65s ease-out both;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .activity-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 30px rgba(47,72,88,.12);
    }

    /* =========================
       GAMBAR KEGIATAN
    ========================= */

    .activity-image {
        width: 100%;
        height: 210px;
        display: block;
        object-fit: cover;
        background: #e9eef1;
    }

    .activity-no-image {
        width: 100%;
        height: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(
            135deg,
            #dceaf0,
            #f5f8fa
        );
        color: #6f858f;
        font-size: 14px;
        font-weight: 600;
    }

    .activity-body {
        padding: 22px;
    }

    .activity-date {
        color: #6fb6d6;
        font-size: 12px;
        font-weight: 700;
    }

    .activity-card h2 {
        margin: 10px 0;
        color: #2f4858;
        font-size: 21px;
        line-height: 1.35;
    }

    .activity-card p {
        margin: 0;
        color: #60747d;
        line-height: 1.7;
    }

    .activity-location {
        margin-top: 15px;
        padding-top: 13px;
        border-top: 1px solid #e2ebef;
        color: #8a989f;
        font-size: 12px;
    }

    .activity-empty {
        max-width: 620px;
        margin: 0 auto;
        padding: 55px 25px;
        border: 1px solid #e2ebef;
        border-radius: 10px;
        background: white;
        color: #60747d;
        text-align: center;
        animation: activity-reveal .65s ease-out both;
    }

    .activity-empty h2 {
        margin: 0 0 10px;
        color: #2f4858;
    }

    @keyframes activity-reveal {

        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    @media (max-width: 900px) {

        .activity-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

    }

    @media (max-width: 600px) {

        .activity-page {
            padding: 45px 18px 70px;
        }

        .activity-grid {
            grid-template-columns: 1fr;
        }

    }

</style>


<section class="activity-page">

    <header class="activity-header">

        <span class="activity-eyebrow">
            UNIWARA ACTIVITIES
        </span>

        <h1>
            Kegiatan Kampus
        </h1>

        <p>
            Temukan berbagai kegiatan dan agenda terbaru
            Universitas PGRI Wiranegara.
        </p>

    </header>


    @if ($kegiatan->isEmpty())

        <div class="activity-empty">

            <h2>
                Belum Ada Kegiatan
            </h2>

            <p>
                Belum tersedia kegiatan terbaru untuk ditampilkan.
            </p>

        </div>

    @else

        <div class="activity-grid">

            @foreach ($kegiatan as $index => $item)

                <article
                    class="activity-card"
                    style="animation-delay: {{ min($index * 90, 450) }}ms;"
                >

                    {{-- =========================
                         GAMBAR KEGIATAN
                    ========================== --}}

                    @if ($item->gambar)

                        <img
                            class="activity-image"
                            src="{{ Storage::url($item->gambar) }}"
                            alt="{{ $item->nama_kegiatan }}"
                        >

                    @else

                        <div class="activity-no-image">
                            Tidak ada gambar
                        </div>

                    @endif


                    {{-- =========================
                         ISI KEGIATAN
                    ========================== --}}

                    <div class="activity-body">

                        <div class="activity-date">

                            {{ $item->tanggal?->format('d F Y') }}

                        </div>


                        <h2>

                            {{ $item->nama_kegiatan }}

                        </h2>


                        @if ($item->deskripsi)

                            <p>

                                {{ $item->deskripsi }}

                            </p>

                        @endif


                        @if ($item->lokasi)

                            <div class="activity-location">

                                Lokasi:
                                {{ $item->lokasi }}

                            </div>

                        @endif

                    </div>

                </article>

            @endforeach

        </div>

    @endif

</section>

@endsection