<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Fakultas & Prodi - UNIWARA</title>


<style>

*{
    box-sizing:border-box;
}


body{

    margin:0;

    font-family:Arial, Helvetica, sans-serif;

    background:#f4f7fb;

    color:#17345f;

}



.page{

    max-width:1250px;

    margin:auto;

    padding:40px;

}




/* BUTTON */


.button{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:7px;

    padding:10px 16px;

    border-radius:9px;

    border:none;

    background:#1976ed;

    color:white;

    text-decoration:none;

    font-size:13px;

    font-weight:600;

    cursor:pointer;

}



.button.secondary{

    background:#edf3fa;

    color:#31557f;

}



.button.green{

    background:#18a36b;

}



.button.danger{

    background:#e5484d;

}






/* HERO */


.hero{

    background:

    linear-gradient(
        135deg,
        #e8f2ff,
        #c9ddff
    );

    border-radius:22px;

    padding:35px 40px;

    margin-bottom:25px;

    border:1px solid #d7e6fa;

}



.hero-icon{

    width:65px;

    height:65px;

    background:#1976ed;

    color:white;

    border-radius:18px;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:30px;

    margin-bottom:15px;

}



.hero h1{

    margin:0;

    font-size:32px;

    color:#102f5d;

}



.hero p{

    margin-top:8px;

    color:#6480a7;

}







/* ALERT */


.alert{

    padding:15px 20px;

    border-radius:12px;

    margin-bottom:20px;

}



.alert.success{

    background:#e8f8ef;

    color:#177348;

}



.alert.error{

    background:#fdeaea;

    color:#b52d38;

}








/* STAT CARD */


.stats{

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:15px;

    margin-bottom:25px;

}



.stat{

    background:white;

    border-radius:18px;

    padding:20px;

    border:1px solid #e1e9f3;

    box-shadow:
    0 8px 20px rgba(30,60,100,.06);

}



.stat-label{

    font-size:11px;

    color:#8495ad;

}



.stat-number{

    margin-top:8px;

    font-size:26px;

    font-weight:bold;

    color:#173b69;

}








/* FACULTY CARD */


.faculty{

    background:white;

    border-radius:20px;

    border:1px solid #e1e9f3;

    margin-bottom:25px;

    overflow:hidden;

    box-shadow:
    0 8px 20px rgba(30,60,100,.06);

}



.faculty-header{

    background:#f7faff;

    padding:20px 25px;

    display:flex;

    justify-content:space-between;

    align-items:center;

}



.faculty-name{

    font-size:20px;

    font-weight:bold;

    color:#173b69;

}



.faculty-actions{

    display:flex;

    gap:8px;

}



.small-button{

    padding:8px 12px;

    border-radius:7px;

    font-size:12px;

    text-decoration:none;

    border:none;

    cursor:pointer;

}



.small-button.edit{

    background:#e5f1ff;

    color:#1261a0;

}



.small-button.red{

    background:#fdeaea;

    color:#b52d38;

}







/* TABEL TETAP */

table{

    width:100%;

    border-collapse:collapse;

}



th{

    padding:14px 16px;

    background:#f7faff;

    color:#718096;

    font-size:12px;

    text-align:left;

}



td{

    padding:16px;

    border-bottom:1px solid #edf1f5;

    font-size:14px;

}



.empty{

    text-align:center;

    padding:50px;

    color:#8495ad;

}



@media(max-width:700px){

.stats{

grid-template-columns:1fr;

}

.page{

padding:20px;

}

}
/* =================================
   ANIMASI HALAMAN FAKULTAS & PRODI
================================= */


/* Saat halaman dibuka */
body{
    animation: pageFade 0.6s ease;
}


@keyframes pageFade{

    from{
        opacity:0;
        transform:translateY(25px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Hero */

.hero{

    animation: heroSlide 0.7s ease;

}


@keyframes heroSlide{

    from{
        opacity:0;
        transform:translateX(-40px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }

}



/* Tombol tambah */

.hero + div,
.button{

    animation: buttonShow .7s ease;

}


@keyframes buttonShow{

    from{
        opacity:0;
        transform:translateY(-20px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Statistik card */

.stat-card,
.summary-card,
.card-stat{

    animation: cardUp .6s ease forwards;
    opacity:0;

}



.stat-card:nth-child(1),
.summary-card:nth-child(1),
.card-stat:nth-child(1){
    animation-delay:.1s;
}


.stat-card:nth-child(2),
.summary-card:nth-child(2),
.card-stat:nth-child(2){
    animation-delay:.2s;
}


.stat-card:nth-child(3),
.summary-card:nth-child(3),
.card-stat:nth-child(3){
    animation-delay:.3s;
}


.stat-card:nth-child(4),
.summary-card:nth-child(4),
.card-stat:nth-child(4){
    animation-delay:.4s;
}



@keyframes cardUp{

    from{
        opacity:0;
        transform:translateY(30px);
    }


    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Card Fakultas */

.fakultas-card,
.card,
.panel{

    animation: fakultasShow .7s ease;

}



@keyframes fakultasShow{

    from{
        opacity:0;
        transform:translateY(35px);
        scale:.96;
    }


    to{
        opacity:1;
        transform:translateY(0);
        scale:1;
    }

}



/* Hover card fakultas */

.fakultas-card:hover,
.card:hover,
.panel:hover{

    transform:translateY(-6px);
    box-shadow:0 15px 30px rgba(0,0,0,.12);
    transition:.3s ease;

}



/* Tombol edit hapus */

button,
.small-button,
a.button{


    transition:.3s ease;

}



button:hover,
.small-button:hover,
a.button:hover{

    transform:translateY(-3px);

}



/* Isi prodi muncul bertahap */

.card table tbody tr,
.panel table tbody tr{

    opacity:0;
    animation: rowFade .5s ease forwards;

}



.card table tbody tr:nth-child(1),
.panel table tbody tr:nth-child(1){

    animation-delay:.2s;

}


.card table tbody tr:nth-child(2),
.panel table tbody tr:nth-child(2){

    animation-delay:.3s;

}


.card table tbody tr:nth-child(3),
.panel table tbody tr:nth-child(3){

    animation-delay:.4s;

}



@keyframes rowFade{

    from{

        opacity:0;
        transform:translateX(20px);

    }

    to{

        opacity:1;
        transform:translateX(0);

    }

}
</style>

</head>
<body lass="page-transition">


<main class="page">





{{-- KEMBALI DASHBOARD --}}


<div style="margin-bottom:20px;">


<a href="{{ route('admin.dashboard') }}"
class="button secondary">


← Kembali ke Dashboard


</a>


</div>








{{-- HERO --}}


<section class="hero">


<div class="hero-icon">

🎓

</div>



<h1>

Kelola Fakultas & Program Studi

</h1>



<p>

Kelola data fakultas, program studi,
kuota mahasiswa, dan jumlah kelas.

</p>



</section>








{{-- BUTTON TAMBAH --}}



<div style="
display:flex;
justify-content:flex-end;
gap:10px;
margin-bottom:25px;
">



<a href="{{ route('admin.fakultas.create') }}"
class="button">


＋ Tambah Fakultas


</a>




<a href="{{ route('admin.program-studi.create') }}"
class="button green">


＋ Tambah Program Studi


</a>



</div>









@if(session('success'))


<div class="alert success">

✓ {{ session('success') }}

</div>


@endif







@if(session('error'))


<div class="alert error">

{{ session('error') }}

</div>


@endif







{{-- STATISTIK ASLI --}}



<div class="stats">



<div class="stat">


<div class="stat-label">

TOTAL FAKULTAS

</div>


<div class="stat-number">

{{ $jumlahFakultas }}

</div>


</div>






<div class="stat">


<div class="stat-label">

TOTAL PROGRAM STUDI

</div>


<div class="stat-number">

{{ $jumlahProdi }}

</div>


</div>






<div class="stat">


<div class="stat-label">

TOTAL KUOTA MAHASISWA

</div>


<div class="stat-number">

{{ number_format($totalKuota,0,',','.') }}

</div>


</div>






<div class="stat">


<div class="stat-label">

TOTAL KELAS

</div>


<div class="stat-number">

{{ $totalKelas }}

</div>


</div>



</div>









{{-- DATA FAKULTAS ASLI --}}



@forelse($fakultas as $item)



<section class="faculty">






<div class="faculty-header">


<div class="faculty-name">


{{ $item->nama_fakultas }}


</div>





<div class="faculty-actions">


<a href="{{ route('admin.fakultas.edit',$item) }}"
class="small-button edit">


✏ Edit Fakultas


</a>





<form action="{{ route('admin.fakultas.destroy',$item) }}"
method="POST"
onsubmit="return confirm('Yakin ingin menghapus fakultas ini?')">


@csrf

@method('DELETE')


<button class="small-button red">


🗑 Hapus


</button>


</form>



</div>



</div>









{{-- TABEL PRODI TETAP --}}



@if($item->programStudis->count())



<table>


<thead>


<tr>


<th>

Program Studi

</th>



<th>

Kuota Mahasiswa

</th>



<th>

Jumlah Kelas

</th>



<th>

Aksi

</th>


</tr>


</thead>





<tbody>



@foreach($item->programStudis as $prodi)



<tr>



<td>


{{ $prodi->nama_prodi }}


</td>




<td>


{{ number_format($prodi->kuota_mahasiswa,0,',','.') }}


</td>





<td>


{{ $prodi->jumlah_kelas }}


</td>





<td>



<div class="faculty-actions">


<a href="{{ route('admin.program-studi.edit',$prodi) }}"
class="small-button edit">


✏ Edit


</a>







<form action="{{ route('admin.program-studi.destroy',$prodi) }}"
method="POST"
onsubmit="return confirm('Yakin ingin menghapus program studi ini?')">


@csrf

@method('DELETE')



<button class="small-button red">


🗑 Hapus


</button>


</form>



</div>



</td>



</tr>



@endforeach



</tbody>



</table>







@else



<div class="empty">


Belum ada program studi.


</div>



@endif







</section>






@empty




<section class="faculty">


<div class="empty">


Belum ada fakultas.


</div>


</section>





@endforelse







</main>



</body>

</html>