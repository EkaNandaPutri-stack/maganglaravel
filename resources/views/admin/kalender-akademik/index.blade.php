<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kalender Akademik - UNIWARA</title>


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



.button{

    display:inline-flex;

    align-items:center;

    gap:7px;

    padding:10px 16px;

    border-radius:9px;

    background:#1976ed;

    color:white;

    text-decoration:none;

    font-size:13px;

    font-weight:600;

}



.button.secondary{

    background:#edf3fa;

    color:#31557f;

}



.hero{

    background:
    linear-gradient(
        135deg,
        #e8f2ff,
        #c9ddff
    );

    border-radius:22px;

    padding:35px 40px;

    margin-bottom:30px;

}



.hero-icon{

    font-size:35px;

}



.hero h1{

    margin:10px 0;

    color:#102f5d;

}



.panel{

    background:white;

    padding:30px;

    border-radius:20px;

    box-shadow:
    0 8px 25px rgba(30,60,100,.08);

}



.panel-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:25px;

}



.panel-header h2{

    margin:0;

}



.table-wrapper{

    overflow-x:auto;

}



table{

    width:100%;

    border-collapse:collapse;

}



th{

    background:#f7faff;

    padding:15px;

    text-align:center;

    color:#64748b;

}



td{

    padding:15px;

    border-bottom:1px solid #edf1f5;

    vertical-align:top;

}



tbody tr:hover{

    background:#f9fbff;

}



.agenda-name{

    font-weight:bold;

    color:#173b69;

}



.status{

    background:#e7f8ef;

    color:#198754;

    padding:7px 12px;

    border-radius:20px;

    font-size:12px;

}



.status.nonaktif{

    background:#fdeaea;

    color:#b52d38;

}



.actions{

    display:flex;

    gap:8px;

}



.small-button{

    padding:8px 12px;

    border-radius:7px;

    text-decoration:none;

    font-size:12px;

}



.edit{

    background:#e5f1ff;

    color:#1261a0;

}



.delete{

    background:#fdeaea;

    color:#b52d38;

    border:none;

}



.empty{

    text-align:center;

    padding:50px;

}


</style>

</head>



<body>


<main class="page">



<a href="{{ route('admin.dashboard') }}"
class="button secondary">

← Kembali Dashboard

</a>





<section class="hero">


<div class="hero-icon">
🗓
</div>


<h1>
Kelola Kalender Akademik
</h1>


<p>
Atur agenda akademik berdasarkan semester.
</p>


</section>







@if(session('success'))

<div style="
background:#e8f8ef;
padding:15px;
border-radius:10px;
margin-bottom:20px;
color:#177348;
">

✓ {{ session('success') }}

</div>

@endif







<section class="panel">



<div class="panel-header">


<div>

<h2>
Daftar Kalender Akademik
</h2>

<p>
Kelola agenda akademik kampus.
</p>


</div>



<a href="{{ route('admin.kalender-akademik.create') }}"
class="button">

＋ Tambah Agenda

</a>



</div>






@if($kalender->isEmpty())


<div class="empty">

<h3>
🗓 Belum Ada Agenda
</h3>

<p>
Silakan tambah kalender akademik.
</p>


</div>




@else



<div class="table-wrapper">


<table>



<thead>

<tr>


<th>
No
</th>


<th>
Tahun Akademik
</th>


<th>
Semester Gasal
</th>


<th>
Kegiatan
</th>


<th>
Semester Genap
</th>


<th>
Status
</th>


<th>
Aksi
</th>


</tr>


</thead>





<tbody>



@foreach($kalender as $item)


<tr>


<td>

{{ $loop->iteration }}

</td>




<td>

{{ $item->tahun_akademik }}

</td>





<td>

{!! nl2br(e($item->semester_gasal)) !!}

</td>





<td>


<div class="agenda-name">

{{ $item->kegiatan }}

</div>


</td>





<td>

{!! nl2br(e($item->semester_genap ?? '-')) !!}

</td>





<td>


@if($item->aktif)


<span class="status">

Aktif

</span>


@else


<span class="status nonaktif">

Tidak Aktif

</span>


@endif



</td>






<td>


<div class="actions">


<a href="{{ route('admin.kalender-akademik.edit',$item) }}"
class="small-button edit">

✏ Edit

</a>





<form action="{{ route('admin.kalender-akademik.destroy',$item) }}"
method="POST"
onsubmit="return confirm('Yakin ingin menghapus agenda ini?')">


@csrf

@method('DELETE')


<button class="small-button delete">

🗑 Hapus

</button>


</form>



</div>


</td>



</tr>



@endforeach




</tbody>


</table>


</div>



@endif




</section>



</main>


</body>


</html>