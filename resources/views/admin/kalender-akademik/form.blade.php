<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $formTitle }} - UNIWARA</title>


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

    max-width:850px;
    margin:auto;
    padding:40px 20px;

}


.panel{

    background:white;
    padding:35px;
    border-radius:18px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

}


h1{

    margin:0 0 25px;
    color:#12345a;

}



label{

    display:block;

    margin-top:18px;
    margin-bottom:8px;

    font-weight:bold;

}



input,
textarea,
select{

    width:100%;
    padding:12px;

    border:1px solid #d6e0ea;

    border-radius:8px;

    font-size:14px;

}



textarea{

    min-height:120px;

    resize:vertical;

}



.row{

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:20px;

}



.error{

    background:#ffe5e5;

    color:#a22;

    padding:15px;

    border-radius:10px;

    margin-bottom:20px;

}



.button-area{

    margin-top:30px;

    display:flex;

    gap:10px;

}



.button{

    padding:12px 20px;

    border-radius:8px;

    border:none;

    text-decoration:none;

    cursor:pointer;

    font-weight:bold;

}



.save{

    background:#1976e8;

    color:white;

}



.back{

    background:#e8eef5;

    color:#345;

}


</style>


</head>


<body>


<main class="page">


<section class="panel">


<h1>
{{ $formTitle }}
</h1>



@if($errors->any())

<div class="error">

<ul>

@foreach($errors->all() as $error)

<li>
{{ $error }}
</li>

@endforeach

</ul>

</div>

@endif





<form action="{{ $formAction }}" method="POST">


@csrf


@if($formMethod != 'POST')

@method($formMethod)

@endif





<label>
Tahun Akademik
</label>


<input

type="text"

name="tahun_akademik"

placeholder="2026/2027"

value="{{ old('tahun_akademik',$kalender->tahun_akademik ?? '') }}"

required>






<label>
Semester Gasal
</label>


<textarea

name="semester_gasal"

placeholder="Contoh: September 2026 - Desember 2026"

required>{{ old('semester_gasal',$kalender->semester_gasal ?? '') }}</textarea>







<label>
Kegiatan / Agenda
</label>


<textarea

name="kegiatan"

placeholder="Masukkan agenda akademik"

required>{{ old('kegiatan',$kalender->kegiatan ?? '') }}</textarea>







<label>
Semester Genap
</label>


<textarea

name="semester_genap"

placeholder="Contoh: Januari 2027 - Juni 2027">{{ old('semester_genap',$kalender->semester_genap ?? '') }}</textarea>







<div class="row">


<div>

<label>
Urutan Tampilan
</label>


<input

type="number"

name="urutan"

value="{{ old('urutan',$kalender->urutan ?? 0) }}">

</div>




<div>

<label>
Status
</label>


<select name="aktif">


<option value="1"

{{ old('aktif',$kalender->aktif ?? 1)==1?'selected':'' }}>

Aktif

</option>



<option value="0"

{{ old('aktif',$kalender->aktif ?? 1)==0?'selected':'' }}>

Tidak Aktif

</option>



</select>


</div>


</div>






<div class="button-area">


<a

href="{{ route('admin.kalender-akademik.index') }}"

class="button back">

Kembali

</a>




<button

type="submit"

class="button save">

Simpan Kalender

</button>


</div>




</form>


</section>


</main>


</body>


</html>