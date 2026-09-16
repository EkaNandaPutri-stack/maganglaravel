@extends('layouts.app')

@section('content')


<style>

*{
    box-sizing:border-box;
}


.kalender-page{

    background:#f5f8fa;

    min-height:100vh;

    padding:60px 20px;

}



.kalender-container{

    max-width:1200px;

    margin:auto;

}



.kalender-card{

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:
    0 15px 40px rgba(0,0,0,.08);

}





.kalender-header{

    padding:40px;

    background:
    linear-gradient(
        135deg,
        #2F4858,
        #6FB6D6
    );

    color:white;

}



.kalender-header h1{

    margin:0;

    font-size:38px;

}



.kalender-header p{

    margin-top:10px;

    opacity:.9;

}





.tahun-akademik{

    margin:30px;

    padding:18px 25px;

    background:#eef8fc;

    border-left:5px solid #6FB6D6;

    border-radius:10px;

    color:#30495b;

    font-weight:600;

    font-size:16px;

}





.table-wrapper{

    padding:30px;

    overflow-x:auto;

}



.kalender-table{

    width:100%;

    border-collapse:collapse;

    min-width:900px;

}



.kalender-table th{

    background:#a8dced;

    color:#16364d;

    padding:16px;

    border:1px solid #78bdd5;

    text-align:center;

    font-size:14px;

}



.kalender-table td{

    border:1px solid #ccd9df;

    padding:15px;

    vertical-align:top;

    color:#34495e;

    line-height:1.7;

    font-size:14px;

}



.kalender-table tr:nth-child(even){

    background:#f8fcff;

}



.kalender-table tr:hover{

    background:#eef8fc;

}





.kegiatan-title{

    font-weight:700;

    color:#203d58;

}





.empty{

    text-align:center;

    padding:50px;

    color:#64748b;

}





@media(max-width:700px){

.kalender-header{

    padding:25px;

}


.kalender-header h1{

    font-size:28px;

}


.table-wrapper{

    padding:15px;

}

}


</style>





<div class="kalender-page">


<div class="kalender-container">


<div class="kalender-card">





<div class="kalender-header">

<h1>
Kalender Akademik
</h1>

<p>
Universitas PGRI Wiranegara
</p>

</div>






<div class="tahun-akademik">


Tahun Akademik :

<strong>

{{ $kalender->first()->tahun_akademik ?? '-' }}

</strong>


</div>







<div class="table-wrapper">


<table class="kalender-table">


<thead>

<tr>

<th>
Semester Gasal
</th>


<th>
Kegiatan
</th>


<th>
Semester Genap
</th>

</tr>


</thead>






<tbody>


@forelse($kalender as $item)



<tr>




<td>

{!! nl2br(e($item->semester_gasal ?? '-')) !!}

</td>






<td>


<div class="kegiatan-title">

{{ $item->kegiatan }}

</div>


</td>







<td>

{!! nl2br(e($item->semester_genap ?? '-')) !!}

</td>





</tr>





@empty


<tr>

<td colspan="3" class="empty">

Belum ada data kalender akademik

</td>

</tr>


@endforelse





</tbody>


</table>


</div>







</div>


</div>


</div>



@endsection