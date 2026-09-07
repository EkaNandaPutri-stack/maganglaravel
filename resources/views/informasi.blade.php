@extends('layouts.app')

@section('content')

<div class="about-page">

    <!-- =========================
         HEADER INFORMASI
    ========================= -->

    <section class="about-header">

        <div class="about-header-content">

            <span class="about-label">
                PUSAT INFORMASI
            </span>

            <h1>
                Informasi Kampus
            </h1>

            <div class="about-line"></div>

            <p>
                Temukan berbagai informasi terbaru, pengumuman,
                kegiatan, dan informasi akademik dari
                Universitas PGRI Wiranegara.
            </p>

        </div>

    </section>



    <!-- =========================
         ISI INFORMASI
    ========================= -->

    <div class="about-container">


        <!-- =========================
             JENIS INFORMASI
        ========================= -->

        <div class="info-section-title">

            <span>
                KATEGORI INFORMASI
            </span>

            <h2>
                Informasi Untuk Anda
            </h2>

            <p>
                Berbagai informasi penting seputar kegiatan
                dan kehidupan kampus.
            </p>

        </div>


        <!-- =========================
             3 KATEGORI
        ========================= -->

        <div class="kategori-grid">


            <!-- PENGUMUMAN -->

            <div class="kategori-card">

                <div class="kategori-icon">
                    📢
                </div>

                <h3>
                    Pengumuman
                </h3>

                <p>
                    Informasi penting dan pengumuman terbaru
                    dari Universitas PGRI Wiranegara.
                </p>

            </div>



            <!-- KEGIATAN -->

            <div class="kategori-card">

                <div class="kategori-icon">
                    📅
                </div>

                <h3>
                    Kegiatan Kampus
                </h3>

                <p>
                    Informasi mengenai kegiatan akademik
                    dan berbagai aktivitas mahasiswa.
                </p>

            </div>



            <!-- AKADEMIK -->

            <div class="kategori-card">

                <div class="kategori-icon">
                    🎓
                </div>

                <h3>
                    Informasi Akademik
                </h3>

                <p>
                    Informasi seputar perkuliahan,
                    pendidikan, dan kegiatan akademik.
                </p>

            </div>

<!-- Data Alumni-->

            <div class="kategori-card">

                <div class="kategori-icon">
                    🎓
                </div>

                <h3>
                    Informasi Alumni
                </h3>

                <p>
                    Informasi seputar alumni kampus
                    
                </p>

        </div>

</div>

        <!-- =========================
             JUDUL INFORMASI TERBARU
        ========================= -->

        <div class="info-section-title informasi-terbaru-title">

            <span>
                UPDATE TERBARU
            </span>

            <h2>
                Informasi Terbaru
            </h2>

            <p>
                Berikut adalah informasi terbaru
                dari kampus kami.
            </p>

        </div>



        <!-- =========================
             DATA DARI DATABASE
        ========================= -->

        @forelse($informasi as $item)

            <div class="about-card animate-card">

                <div class="about-icon">
                    📌
                </div>


                <div class="about-content">

                    <h2>
                        {{ $item->judul }}
                    </h2>

                    <p>
                        {{ $item->isi }}
                    </p>


                    <!-- TANGGAL -->

                    @if($item->created_at)

                        <div class="tanggal-informasi">

                            📅 Dipublikasikan:
                            {{ $item->created_at->format('d M Y') }}

                        </div>

                    @endif


                </div>

            </div>

        @empty


            <!-- =========================
                 JIKA BELUM ADA INFORMASI
            ========================= -->

            <div class="about-card animate-card">

                <div class="about-icon">
                    📭
                </div>


                <div class="about-content">

                    <h2>
                        Belum Ada Informasi
                    </h2>

                    <p>
                        Saat ini belum ada informasi terbaru
                        dari kampus.
                    </p>

                </div>

            </div>


        @endforelse


    </div>

</div>

@endsection