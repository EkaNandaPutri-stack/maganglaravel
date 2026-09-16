@extends('layouts.app')

@section('content')
<style>
    .announcement-page {
        min-height: calc(100vh - 70px);
        padding: 72px 7% 100px;
        background: #f4f7f8;
    }

    .announcement-hero {
        max-width: 1120px;
        margin: 0 auto 52px;
        padding: 46px 52px;
        border-radius: 14px;
        background: linear-gradient(115deg, #2f4858, #416d80);
        color: white;
        box-shadow: 0 18px 35px rgba(47,72,88,.16);
        animation: announcement-reveal .7s ease-out both;
    }

    .announcement-eyebrow {
        color: #b9e3f2;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 3px;
    }

    .announcement-hero h1 {
        margin: 14px 0 10px;
        font-size: clamp(32px, 5vw, 54px);
        line-height: 1.1;
    }

    .announcement-hero p {
        max-width: 560px;
        margin: 0;
        color: #eaf6fa;
        line-height: 1.7;
    }

    .announcement-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 24px;
        max-width: 1120px;
        margin: 0 auto;
    }

    .announcement-card {
        overflow: hidden;
        background: white;
        border: 1px solid #dfe9ed;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(47,72,88,.07);
        animation: announcement-reveal .65s ease-out both;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .announcement-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 32px rgba(47,72,88,.12);
    }

    .announcement-image {
        width: 100%;
        height: 210px;
        display: block;
        object-fit: cover;
    }

    .announcement-card-body {
        padding: 22px 24px 25px;
    }

    .announcement-date {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        color: #6a9eb4;
        font-size: 12px;
        font-weight: 700;
    }

    .announcement-date::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #6fb6d6;
    }

    .announcement-card h2 {
        margin: 12px 0 10px;
        color: #2f4858;
        font-size: 23px;
        line-height: 1.3;
    }

    .announcement-card p {
        margin: 0;
        color: #60747d;
        line-height: 1.75;
    }

    .announcement-empty {
        max-width: 620px;
        margin: 0 auto;
        padding: 55px 25px;
        border: 1px solid #dfe9ed;
        border-radius: 12px;
        background: white;
        color: #60747d;
        text-align: center;
        animation: announcement-reveal .65s ease-out both;
    }

    .announcement-empty h2 {
        margin: 0 0 10px;
        color: #2f4858;
    }

    @keyframes announcement-reveal {
        from { opacity: 0; transform: translateY(18px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 720px) {
        .announcement-page { padding: 42px 18px 70px; }
        .announcement-hero { margin-bottom: 30px; padding: 34px 25px; }
        .announcement-list { grid-template-columns: 1fr; }
    }
</style>

<section class="announcement-page">
    <header class="announcement-hero">
        <span class="announcement-eyebrow">UNIWARA • INFORMASI RESMI</span>
        <h1>Pengumuman Kampus</h1>
        <p>Ikuti informasi resmi dan pemberitahuan terbaru dari Universitas PGRI Wiranegara.</p>
    </header>

    @if ($pengumuman->isEmpty())
        <div class="announcement-empty">
            <h2>Belum Ada Pengumuman</h2>
            <p>Belum tersedia pengumuman terbaru untuk ditampilkan.</p>
        </div>
    @else
        <div class="announcement-list">
            @foreach ($pengumuman as $index => $item)
                <article class="announcement-card" style="animation-delay: {{ min($index * 90, 450) }}ms;">
                    @if ($item->gambar)
                        <img class="announcement-image" src="{{ str_starts_with($item->gambar, 'pengumuman/') ? asset('storage/'.$item->gambar) : asset($item->gambar) }}" alt="{{ $item->judul }}">
                    @endif

                    <div class="announcement-card-body">
                        <div class="announcement-date">{{ $item->tanggal?->format('d F Y') }}</div>
                        <h2>{{ $item->judul }}</h2>
                        <p>{{ $item->isi }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</section>
@endsection
