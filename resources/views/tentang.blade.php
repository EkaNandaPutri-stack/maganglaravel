@extends('layouts.app') 
 
@section('content') 
 
<style> 
 
/* ===================================================== 
   PAGE 
===================================================== */ 
 
.about-page { 
    background: #F5F8FA; 
    min-height: 100vh; 
    overflow: hidden; 
} 
 
 
/* ===================================================== 
   PROFIL — FULL SCREEN 
===================================================== */ 
 
.about-profile { 
    position: relative; 
    min-height: calc(100vh - 70px); 
    display: flex; 
    align-items: center; 
    padding: 80px 8%; 
 
    background: 
        linear-gradient( 
            135deg, 
            #FFFFFF 0%, 
            #F5FAFC 55%, 
            #E4F2F8 100% 
        ); 
 
    overflow: hidden; 
} 
 
 
/* ===================================================== 
   TULISAN BESAR BACKGROUND 
===================================================== */ 
 
.about-profile::before { 
    content: "UNIWARA"; 
 
    position: absolute; 
    right: -40px; 
    bottom: -30px; 
 
    font-size: clamp(100px, 18vw, 270px); 
    font-weight: 900; 
    line-height: 1; 
    letter-spacing: -10px; 
 
    color: rgba(111, 182, 214, .08); 
 
    white-space: nowrap; 
    pointer-events: none; 
} 
 
 
/* ===================================================== 
   LINGKARAN DEKORASI 
===================================================== */ 
 
.about-profile::after { 
    content: ""; 
 
    position: absolute; 
    width: 420px; 
    height: 420px; 
 
    right: -190px; 
    top: -160px; 
 
    border: 70px solid rgba(111, 182, 214, .10); 
 
    border-radius: 50%; 
    pointer-events: none; 
} 
 
 
/* ===================================================== 
   CONTAINER 
===================================================== */ 
 
.about-container { 
    position: relative; 
    z-index: 3; 
 
    width: 100%; 
    max-width: 1150px; 
    margin: auto; 
 
    display: grid; 
    grid-template-columns: 1.1fr .9fr; 
 
    gap: 80px; 
    align-items: center; 
} 
 
 
/* ===================================================== 
   TEKS PROFIL 
===================================================== */ 
 
.about-text { 
    position: relative; 
    padding-left: 25px; 
} 
 
 
/* GARIS BABY BLUE */ 
 
.about-text::before { 
    content: ""; 
 
    position: absolute; 
    left: 0; 
    top: 5px; 
 
    width: 5px; 
    height: 115px; 
 
    background: #6FB6D6; 
    border-radius: 10px; 
} 
 
 
/* LABEL */ 
 
.about-text .label { 
    display: inline-block; 
 
    color: #6FB6D6; 
 
    font-size: 12px; 
    font-weight: 800; 
    letter-spacing: 3px; 
    margin-bottom: 15px; 
} 
 
 
/* JUDUL */ 
 
.about-text h2 { 
    max-width: 650px; 
 
    margin: 0 0 25px; 
 
    color: #4A6572; 
 
    font-size: clamp(40px, 5vw, 68px); 
    line-height: 1.05; 
    letter-spacing: -2px; 
} 
 
 
/* PARAGRAF */ 
 
.about-text p { 
    max-width: 650px; 
    margin: 0 0 17px; 
 
    color: #60747D; 
 
    font-size: 15px; 
    line-height: 1.9; 
} 
 
 
/* ===================================================== 
   STATISTIK 
===================================================== */ 
 
.about-stats { 
    display: grid; 
    grid-template-columns: repeat(3, 1fr); 
    gap: 15px; 
 
    margin-top: 35px; 
    max-width: 650px; 
} 
 
 
.about-stat { 
    position: relative; 
 
    padding: 18px 20px; 
 
    border-left: 3px solid #6FB6D6; 
 
    background: rgba(255,255,255,.75); 
 
    transition: all .35s ease; 
} 
 
 
.about-stat:hover { 
    transform: translateY(-6px); 
 
    background: white; 
 
    box-shadow: 
        0 12px 25px 
        rgba(74,101,114,.10); 
} 
 
 
.about-stat-number { 
    color: #5FA8C9; 
 
    font-size: 27px; 
    font-weight: 900; 
    line-height: 1; 
 
    margin-bottom: 8px; 
} 
 
 
.about-stat-label { 
    color: #71818A; 
 
    font-size: 11px; 
    font-weight: 700; 
    letter-spacing: 1px; 
    text-transform: uppercase; 
} 
 
 
/* ===================================================== 
   VISUAL KANAN 
===================================================== */ 
 
.about-visual { 
    position: relative; 
 
    min-height: 450px; 
 
    display: flex; 
    align-items: center; 
    justify-content: center; 
} 
 
 
/* ANGKA 01 */ 
 
.about-big-number { 
    position: absolute; 
 
    top: -50px; 
    right: 0; 
 
    font-size: 220px; 
    font-weight: 900; 
    line-height: 1; 
 
    color: rgba(111,182,214,.10); 
 
    user-select: none; 
} 
 
 
/* ===================================================== 
   LINGKARAN UTAMA 
===================================================== */ 
 
.visual-circle { 
    position: relative; 
 
    width: 340px; 
    height: 340px; 
 
    border-radius: 50%; 
 
    background: 
        linear-gradient( 
            145deg, 
            #7FC4E1, 
            #5A9FBE 
        ); 
 
    display: flex; 
    align-items: center; 
    justify-content: center; 
 
    box-shadow: 
        0 30px 60px 
        rgba(90,159,190,.25); 
 
    animation: floating 5s ease-in-out infinite; 
} 
 
 
/* LINGKARAN DALAM */ 
 
.visual-circle::before { 
    content: ""; 
 
    position: absolute; 
 
    width: 275px; 
    height: 275px; 
 
    border: 1px solid rgba(255,255,255,.45); 
 
    border-radius: 50%; 
} 
 
 
/* ISI LINGKARAN */ 
 
.visual-content { 
    position: relative; 
    z-index: 2; 
 
    text-align: center; 
    color: white; 
} 
 /* =====================================================
   LOGO UNIWARA
===================================================== */

.visual-logo {

    position: relative;
    z-index: 3;

    width: 280px;
    height: 280px;

    display: flex;
    align-items: center;
    justify-content: center;

}


.visual-logo img {

    width: 100%;
    height: 100%;

    object-fit: contain;

    filter:
        drop-shadow(
            0 15px 30px rgba(0,0,0,.18)
        );

}
 
.visual-content .mini { 
    font-size: 11px; 
    letter-spacing: 4px; 
    font-weight: 700; 
 
    opacity: .9; 
    margin-bottom: 15px; 
} 
 
 
.visual-content h3 { 
    margin: 0; 
 
    font-size: 48px; 
    font-weight: 900; 
    letter-spacing: 2px; 
} 
 
 
.visual-content span { 
    display: block; 
 
    margin-top: 10px; 
 
    font-size: 13px; 
    letter-spacing: 2px; 
 
    color: #EAF8FC; 
} 
 
 
/* ===================================================== 
   ELEMEN KECIL VISUAL 
===================================================== */ 
 
.visual-dot { 
    position: absolute; 
 
    width: 18px; 
    height: 18px; 
 
    background: #6FB6D6; 
 
    border-radius: 50%; 
 
    box-shadow: 
        0 0 0 8px 
        rgba(111,182,214,.12); 
} 
 
 
.dot-one { 
    top: 45px; 
    left: 20px; 
} 
 
 
.dot-two { 
    right: 10px; 
    bottom: 50px; 
 
    width: 12px; 
    height: 12px; 
} 
 
 
.visual-line { 
    position: absolute; 
 
    width: 100px; 
    height: 100px; 
 
    left: -30px; 
    bottom: 20px; 
 
    border-left: 2px solid rgba(111,182,214,.30); 
    border-bottom: 2px solid rgba(111,182,214,.30); 
} 
 
 
/* ===================================================== 
   ANIMASI VISUAL 
===================================================== */ 
 
@keyframes floating { 
 
    0%, 
    100% { 
        transform: translateY(0); 
    } 
 
    50% { 
        transform: translateY(-12px); 
    } 
 
} 
 
 
/* ===================================================== 
   VISI & MISI 
===================================================== */ 
 
.vision-section { 
    padding: 100px 8%; 
 
    background: #F1F5F7; 
 
    overflow: hidden; 
} 
 
 
.section-heading { 
    text-align: center; 
    margin-bottom: 50px; 
} 
 
 
.section-heading span { 
    color: #6FB6D6; 
 
    font-size: 12px; 
    font-weight: 800; 
    letter-spacing: 3px; 
} 
 
 
.section-heading h2 { 
    margin: 10px 0 0; 
 
    color: #4A6572; 
 
    font-size: 38px; 
} 
 
 
.vision-grid { 
    max-width: 1100px; 
    margin: auto; 
 
    display: grid; 
    grid-template-columns: repeat(2, 1fr); 
 
    gap: 25px; 
} 
 
 
/* ===================================================== 
   VISION CARD 
===================================================== */ 
 
.vision-card {
    position: relative;

    padding: 40px;

    background: white;

    border-radius: 
        35px 
        12px 
        35px 
        12px;

    border-top: 5px solid #6FB6D6;

    box-shadow:
        0 10px 30px 
        rgba(74,101,114,.06);

    transition: all .4s ease;

    overflow: hidden;

    /* TAMBAHAN */
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;

} 
 
 
.vision-card::after { 
    content: ""; 
 
    position: absolute; 
 
    width: 150px; 
    height: 150px; 
 
    right: -75px; 
    bottom: -75px; 
 
    border-radius: 50%; 
 
    background: rgba(111,182,214,.07); 
 
    transition: transform .5s ease; 
} 
 
 
.vision-card:hover { 
    transform: translateY(-8px); 
 
    border-radius: 
        12px 
        35px 
        12px 
        35px; 
 
    box-shadow: 
        0 20px 40px 
        rgba(74,101,114,.10); 
} 
 
 
.vision-card:hover::after { 
    transform: scale(1.5); 
} 
 
 
.vision-icon {

    position: relative;
    z-index: 2;

    width: 55px;
    height: 55px;

    border-radius: 50%;

    background: #6FB6D6;
    color: white;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 24px;

    margin: 0 auto 20px auto;
} 
 
 
.vision-card h3 { 
    position: relative; 
    z-index: 2; 
 
    color: #4A6572; 
 
    font-size: 24px; 
 
    margin: 0 0 15px; 
} 
 
 
.vision-card p { 
    position: relative; 
    z-index: 2; 
 
    color: #667880; 
 
    line-height: 1.8; 
    margin: 0; 
} 
 
 
.vision-card ul { 
    position: relative; 
    z-index: 2; 
 
    padding-left: 20px; 
 
    color: #667880; 
 
    line-height: 2; 
    margin: 0; 
} 
.vision-card ul {

    list-style-position: outside;

    padding-left: 25px;

    margin: 0 auto;

    max-width: 420px;

    text-align: left;

} 
 
/* ===================================================== 
   MENGAPA MEMILIH UNIWARA 
===================================================== */ 
 
.values-section { 
    padding: 100px 8%; 
 
    background: white; 
 
    overflow: hidden; 
} 
 
 
.values-grid { 
    max-width: 1100px; 
    margin: auto; 
 
    display: grid; 
    grid-template-columns: repeat(3, 1fr); 
 
    gap: 25px; 
} 
 
 
.value-card { 
    padding: 40px 30px; 
 
    text-align: center; 
 
    background: #F7FAFB; 
 
    border-radius: 
        30px 
        10px 
        30px 
        10px; 
 
    border: 1px solid #E2EBEF; 
 
    transition: all .4s ease; 
} 
 
 
.value-card:hover { 
    transform: translateY(-10px); 
 
    border-radius: 
        10px 
        30px 
        10px 
        30px; 
 
    border-color: #6FB6D6; 
 
    box-shadow: 
        0 18px 35px 
        rgba(74,101,114,.10); 
} 
 
 
.value-number { 
    color: #5FA8C9; 
 
    font-size: 42px; 
    font-weight: 900; 
 
    margin-bottom: 15px; 
 
    transition: transform .4s ease; 
} 
 
 
.value-card:hover .value-number { 
    transform: scale(1.15); 
} 
 
 
.value-card h3 { 
    color: #4A6572; 
 
    font-size: 19px; 
 
    margin: 0 0 10px; 
} 
 
 
.value-card p { 
    color: #71818A; 
 
    font-size: 14px; 
    line-height: 1.7; 
    margin: 0; 
} 
 
 
/* ===================================================== 
   ANIMASI SCROLL 
===================================================== */ 
 
.scroll-animate { 
    opacity: 0; 
 
    transition: 
        opacity .9s ease, 
        transform .9s ease; 
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
    transform: translate(0,0); 
} 
 
 
.delay-1 { 
    transition-delay: .15s; 
} 
 
 
.delay-2 { 
    transition-delay: .3s; 
} 
 
 
/* ===================================================== 
   TABLET 
===================================================== */ 
 
@media (max-width: 900px) { 
 
    .about-profile { 
        min-height: auto; 
        padding: 90px 7%; 
    } 
 
    .about-container { 
        grid-template-columns: 1fr; 
        gap: 60px; 
    } 
 
    .about-visual { 
        min-height: 380px; 
    } 
 
    .vision-grid { 
        grid-template-columns: 1fr; 
    } 
 
    .values-grid { 
        grid-template-columns: repeat(2, 1fr); 
    } 
 
} 
 
 
/* ===================================================== 
   MOBILE 
===================================================== */ 
 
@media (max-width: 600px) { 
 
    .about-profile { 
        padding: 70px 25px; 
    } 
 
    .about-container { 
        gap: 40px; 
    } 
 
    .about-text { 
        padding-left: 18px; 
    } 
 
    .about-text h2 { 
        font-size: 39px; 
        letter-spacing: -1.5px; 
    } 
 
    .about-text p { 
        font-size: 14px; 
        line-height: 1.8; 
    } 
 
    .about-stats { 
        grid-template-columns: 1fr; 
        gap: 10px; 
    } 
 
    .about-visual { 
        min-height: 320px; 
    } 
 
    .visual-circle { 
        width: 270px; 
        height: 270px; 
    } 
 
    .visual-circle::before { 
        width: 220px; 
        height: 220px; 
    } 
    .visual-logo {

    width: 170px;
    height: 170px;

    }
 
    .visual-content h3 { 
        font-size: 38px; 
    } 
 
    .about-big-number { 
        font-size: 150px; 
        top: -20px; 
    } 
 
    .section-heading h2 { 
        font-size: 29px; 
    } 
 
    .vision-section, 
    .values-section { 
        padding: 70px 25px; 
    } 
 
    .vision-card { 
        padding: 30px; 
    } 
 
    .values-grid { 
        grid-template-columns: 1fr; 
    } 
 
} 
 
</style> 
 
 
<div class="about-page"> 
 
    <!-- ================================================= 
         PROFIL UNIWARA 
    ================================================= --> 
 
    <section class="about-profile"> 
 
        <div class="about-container"> 
 
            <!-- TEKS PROFIL --> 
 
            <div class="about-text scroll-animate scroll-left"> 
 
                <div class="label"> 
                    PROFIL UNIVERSITAS 
                </div> 
 
                <h2> 
                    Universitas PGRI Wiranegara 
                </h2> 
 
                <p> 
                    Universitas PGRI Wiranegara atau UNIWARA 
                    merupakan perguruan tinggi yang berada di 
                    Kota Pasuruan, Jawa Timur. 
                </p> 
 
                <p> 
                    UNIWARA hadir untuk memberikan kesempatan 
                    kepada mahasiswa dalam memperoleh pendidikan 
                    yang berkualitas serta mengembangkan potensi 
                    akademik dan keterampilan mereka. 
                </p> 
 
                <p> 
                    Dengan semangat pendidikan dan pengembangan 
                    karakter, UNIWARA terus berupaya menciptakan 
                    lingkungan akademik yang mendukung mahasiswa 
                    untuk berkembang dan berprestasi. 
                </p> 
 
                <!-- STATISTIK --> 
 
                <div class="about-stats"> 
 
                    <div class="about-stat"> 
                        <div class="about-stat-number">13</div> 
 
                        <div class="about-stat-label"> 
                            Program Studi 
                        </div> 
                    </div> 
 
                    <div class="about-stat"> 
                        <div class="about-stat-number">4</div> 
 
                        <div class="about-stat-label"> 
                            Fakultas 
                        </div> 
                    </div> 
 
                    <div class="about-stat"> 
                        <div class="about-stat-number">S1–S2</div> 
 
                        <div class="about-stat-label"> 
                            Jenjang Pendidikan 
                        </div> 
                    </div> 
 
                </div> 
 
            </div> 
 
 
            <!-- VISUAL KANAN --> 
 
            <div class="about-visual scroll-animate scroll-right"> 
 
                <div class="about-big-number"> 
                    01 
                </div> 
 <div class="visual-circle">

    <div class="visual-logo">
        <img src="{{ asset('image/logo-uniwara.png') }}" 
             alt="Logo UNIWARA">
    </div>

</div>
 
                <div class="visual-dot dot-one"></div> 
                <div class="visual-dot dot-two"></div> 
                <div class="visual-line"></div> 
 
            </div> 
 
        </div> 
 
    </section> 
 
 
    <!-- ================================================= 
         VISI & MISI 
    ================================================= --> 
 
    <section class="vision-section"> 
 
        <div class="section-heading scroll-animate scroll-up"> 
 
            <span> 
                TENTANG UNIWARA 
            </span> 
 
            <h2> 
                Visi & Misi 
            </h2> 
 
        </div> 
 
        <div class="vision-grid"> 
 
            <!-- VISI --> 
 
            <div class="vision-card scroll-animate scroll-up"> 
 
                <div class="vision-icon"> 
                    🎯 
                </div> 
 
                <h3> 
                    Visi 
                </h3> 
 
                <p> 
                    Menjadi perguruan tinggi yang unggul dalam 
                    mengembangkan sumber daya manusia yang 
                    kompeten, berkarakter, dan mampu memberikan 
                    kontribusi bagi masyarakat. 
                </p> 
 
            </div> 
 
            <!-- MISI --> 
 
            <div class="vision-card scroll-animate scroll-up delay-1"> 
 
                <div class="vision-icon"> 
                    ⭐ 
                </div> 
 
                <h3> 
                    Misi 
                </h3> 
 
                <ul> 
 
                    <li> 
                        Menyelenggarakan pendidikan yang berkualitas. 
                    </li> 
 
                    <li> 
                        Mengembangkan potensi dan kreativitas mahasiswa. 
                    </li> 
 
                    <li> 
                        Mendorong penelitian dan pengabdian kepada masyarakat. 
                    </li> 
 
                    <li> 
                        Membangun lulusan yang kompeten dan berkarakter. 
                    </li> 
 
                </ul> 
 
            </div> 
 
        </div> 
 
    </section> 
 
 
    <!-- ================================================= 
         MENGAPA MEMILIH UNIWARA 
    ================================================= --> 
 
    <section class="values-section"> 
 
        <div class="section-heading scroll-animate scroll-up"> 
 
            <span> 
                KEUNGGULAN 
            </span> 
 
            <h2> 
                Mengapa Memilih UNIWARA? 
            </h2> 
 
        </div> 
 
        <div class="values-grid"> 
 
            <!-- 01 --> 
 
            <div class="value-card scroll-animate scroll-up"> 
 
                <div class="value-number"> 
                    01 
                </div> 
 
                <h3> 
                    Pendidikan Berkualitas 
                </h3> 
 
                <p> 
                    Mendukung proses pembelajaran yang 
                    membantu mahasiswa mengembangkan 
                    kemampuan akademik dan keterampilan. 
                </p> 
 
            </div> 
 
            <!-- 02 --> 
 
            <div class="value-card scroll-animate scroll-up delay-1"> 
 
                <div class="value-number"> 
                    02 
                </div> 
 
                <h3> 
                    Pengembangan Karakter 
                </h3> 
 
                <p> 
                    Membentuk mahasiswa yang tidak hanya 
                    unggul secara akademik tetapi juga 
                    memiliki karakter dan tanggung jawab. 
                </p> 
 
            </div> 
 
            <!-- 03 --> 
 
            <div class="value-card scroll-animate scroll-up delay-2"> 
 
                <div class="value-number"> 
                    03 
                </div> 
 
                <h3> 
                    Siap Menghadapi Masa Depan 
                </h3> 
 
                <p> 
                    Membekali mahasiswa dengan pengetahuan 
                    dan kemampuan yang dapat diterapkan 
                    dalam dunia kerja dan masyarakat. 
                </p> 
 
            </div> 
 
        </div> 
 
    </section> 
 
</div> 
 
 
<!-- ===================================================== 
     JAVASCRIPT ANIMASI SCROLL 
===================================================== --> 
 
<script> 
 
document.addEventListener( 
    "DOMContentLoaded", 
    function () { 
 
        const elements = 
            document.querySelectorAll( 
                ".scroll-animate" 
            ); 
 
        const observer = 
            new IntersectionObserver( 
                function (entries) { 
 
                    entries.forEach( 
                        function (entry) { 
 
                            if (entry.isIntersecting) { 
 
                                entry.target.classList.add( 
                                    "show" 
                                ); 
 
                                observer.unobserve( 
                                    entry.target 
                                ); 
 
                            } 
 
                        } 
                    ); 
 
                }, 
                { 
                    threshold: 0.15 
                } 
            ); 
 
        elements.forEach( 
            function (element) { 
                observer.observe(element); 
            } 
        ); 
 
    } 
); 
 
</script> 
 
@endsection