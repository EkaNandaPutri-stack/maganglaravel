@extends('layouts.app') 
 
@section('content') 
 
<style> 
 
    /* ========================= 
       SLIDER BERANDA 
    ========================= */ 
 
    .home-slider { 
        position: relative; 
        width: 100%; 
        height: calc(100vh - 65px); 
        min-height: 550px; 
        overflow: hidden; 
        background: #222; 
    } 
 
    .slide { 
        position: absolute; 
        width: 100%; 
        height: 100%; 
        top: 0; 
        left: 0; 
        opacity: 0; 
        transition: opacity 1.2s ease-in-out; 
    } 
 
    .slide.active { 
        opacity: 1; 
    } 
 
    .slide img { 
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
    } 
 
    .slide::after { 
        content: ""; 
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        background: rgba(0, 0, 0, 0.35); 
    } 
 
    /* ========================= 
       TEKS DI ATAS SLIDER 
    ========================= */ 
 
    .slider-text { 
        position: absolute; 
        z-index: 5; 
        top: 50%; 
        left: 8%; 
        transform: translateY(-50%); 
        color: white; 
        max-width: 700px; 
        animation: teksMasuk 1.2s ease; 
    } 
 
    .slider-text span { 
        font-size: 15px; 
        font-weight: bold; 
        letter-spacing: 3px; 
    } 
 
    .slider-text h1 { 
        font-size: 55px; 
        line-height: 1.15; 
        margin: 15px 0; 
        font-weight: 700; 
    } 
 
    .slider-text p { 
        font-size: 18px; 
        line-height: 1.7; 
        max-width: 650px; 
        font-weight: 700; 
    } 
 
    /* ========================= 
       TITIK SLIDER 
    ========================= */ 
 
    .slider-dots { 
        position: absolute; 
        z-index: 10; 
        bottom: 30px; 
        left: 50%; 
        transform: translateX(-50%); 
        display: flex; 
        gap: 10px; 
    } 
 
    .dot { 
        width: 10px; 
        height: 10px; 
        border-radius: 50%; 
        background: rgba(255,255,255,0.5); 
        transition: 0.3s; 
    } 
 
    .dot.active { 
        width: 30px; 
        border-radius: 10px; 
        background: white; 
    } 
 
    /* ========================= 
       ALAMAT - ABU MUDA 
    ========================= */ 
 
    .address-box { 
        width: 100%; 
        background: #F1F3F4; 
        color: #4A6572; 
        padding: 22px 8%; 
        display: flex; 
        justify-content: center; 
        text-align: center; 
        border-top: 1px solid #DDE7EB; 
        animation: alamatMasuk 1s ease; 
    } 
 
    .address-content { 
        max-width: 900px; 
    } 
 
    .address-content h2 { 
        font-size: 20px; 
        margin-bottom: 5px; 
        color: #4A6572; 
        font-weight: 700; 
    } 
 
    .address-content p { 
        color: #6B7C85; 
        line-height: 1.5; 
        margin: 2px 0; 
        font-size: 14px; 
        font-weight: 600; 
    } 
 
    /* ========================= 
       ANIMASI 
    ========================= */ 
 
    .home-slider { 
        animation: sliderMasuk 1s ease; 
    } 
 
    @keyframes sliderMasuk { 
        from { 
            opacity: 0; 
            transform: scale(1.03); 
        } 
 
        to { 
            opacity: 1; 
            transform: scale(1); 
        } 
    } 
 
    @keyframes teksMasuk { 
        from { 
            opacity: 0; 
            transform: translateY(-40%); 
        } 
 
        to { 
            opacity: 1; 
            transform: translateY(-50%); 
        } 
    } 
 
    @keyframes alamatMasuk { 
        from { 
            opacity: 0; 
            transform: translateY(30px); 
        } 
 
        to { 
            opacity: 1; 
            transform: translateY(0); 
        } 
    }    
 
    /* ========================= 
       RESPONSIVE 
    ========================= */ 
 
    @media (max-width: 600px) { 
 
        .home-slider { 
            height: calc(100vh - 100px); 
            min-height: 500px; 
        } 
 
        .slider-text { 
            left: 25px; 
            right: 25px; 
        } 
 
        .slider-text h1 { 
            font-size: 36px; 
        } 
 
        .slider-text p { 
            font-size: 15px; 
        } 
 
    } 
 
</style> 
 
<!-- ========================= 
     SLIDER 
========================= --> 
 
<section class="home-slider"> 
 
    <!-- FOTO 1 --> 
    <div class="slide active"> 
        <img  
            src="{{ asset('image/kampus1.png') }}" 
            alt="Kampus UNIWARA" 
        > 
    </div> 
 
    <!-- FOTO 2 --> 
    <div class="slide"> 
        <img  
            src="{{ asset('image/kampus2.png') }}" 
            alt="Kampus UNIWARA" 
        > 
    </div> 
 
    <!-- FOTO 3 --> 
    <div class="slide"> 
        <img  
            src="{{ asset('image/kampus3.png') }}" 
            alt="Kampus UNIWARA" 
        > 
    </div> 
 
    <!-- FOTO 4 --> 
    <div class="slide"> 
        <img  
            src="{{ asset('image/kampus4.png') }}" 
            alt="Kampus UNIWARA" 
        > 
    </div> 
 
    <!-- TEKS --> 
    <div class="slider-text"> 
 
        <span> 
            <h1>Selamat Datang di Uniwara</h1> 
        </span> 
 
        <p> 
            Universitas PGRI Wiranegara atau UNIWARA merupakan perguruan 
            tinggi yang berlokasi di Kota Pasuruan, Jawa Timur. 
            UNIWARA berkomitmen untuk menyelenggarakan pendidikan tinggi 
            yang berkualitas serta menghasilkan lulusan yang memiliki 
            kompetensi, karakter, dan kesiapan menghadapi dunia kerja. 
        </p> 
 
    </div> 
 
    <!-- DOT --> 
    <div class="slider-dots"> 
 
        <div class="dot active"></div> 
        <div class="dot"></div> 
        <div class="dot"></div> 
        <div class="dot"></div> 
 
    </div> 
 
</section> 
 
<!-- ========================= 
     ALAMAT 
========================= --> 
 
<section class="address-box"> 
 
    <div class="address-content"> 
 
        <h2> 
            Universitas PGRI Wiranegara 
        </h2> 
 
        <p> 
            📍 Jl. Ki Hajar Dewantara 27-29 Pasuruan, 
            Jawa Timur 
        </p> 
 
        <p> 
            ☎ (0343) 421948 
        </p> 
 
        <p> 
            ✉ univ.pgriwiranegara@gmail.com 
        </p> 
 
        <p> 
            © {{ date('Y') }} UNIWARA 
        </p> 
 
    </div> 
 
</section> 
 
<!-- ========================= 
     JAVASCRIPT SLIDER 
========================= --> 
 
<script> 
 
    let slides = document.querySelectorAll('.slide'); 
    let dots = document.querySelectorAll('.dot'); 
    let currentSlide = 0; 
 
    function showSlide(index) { 
 
        slides.forEach(function(slide) { 
            slide.classList.remove('active'); 
        }); 
 
        dots.forEach(function(dot) { 
            dot.classList.remove('active'); 
        }); 
 
        slides[index].classList.add('active'); 
        dots[index].classList.add('active'); 
 
    } 
 
    function nextSlide() { 
 
        currentSlide++; 
 
        if (currentSlide >= slides.length) { 
            currentSlide = 0; 
        } 
 
        showSlide(currentSlide); 
 
    } 
 
    setInterval(nextSlide, 4000); 
 
</script> 
 
@endsection