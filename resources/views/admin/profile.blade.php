<!DOCTYPE html>
<html lang="id">

<head>

<title>Profil Admin</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}


body{

    font-family:Arial, Helvetica, sans-serif;

    background:linear-gradient(
        135deg,
        #e8f2ff,
        #d5e8ff,
        #eef6ff
    );

    min-height:100vh;

    color:#172b4d;

}


.profile-container{

    padding:40px;

    display:flex;

    justify-content:center;

}


.profile-box{

    width:600px;

    background:white;

    border-radius:20px;

    padding:35px;

    box-shadow:0 15px 35px rgba(0,0,0,.12);

}


.avatar{

    width:120px;
    height:120px;
    margin:auto;
    border-radius:50%;
    overflow:visible;
    background:#e5f1ff;
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:45px;
    font-weight:bold;
    color:#1976e8;

}


.avatar img{

    width:100%;
    height:100%;
    border-radius:50%;
    object-fit:cover;

}


.upload-btn{

    position:absolute;

    right:-5px;

    bottom:5px;

    width:35px;

    height:35px;

    background:#1976e8;

    color:white;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:24px;

    font-weight:bold;

    cursor:pointer;

    border:3px solid white;

    z-index:10;

}



.profile-header{

    text-align:center;

    margin-bottom:25px;

}


.profile-header h2{

    margin-top:15px;

    color:#12345f;

}


.profile-header p{

    color:#718096;

}



.info{

    margin-top:20px;

}


.info-item{

    display:flex;

    justify-content:space-between;

    background:#f8fbff;

    padding:15px;

    border-radius:12px;

    margin-bottom:12px;

}



.info-item span{

    color:#718096;

}



.info-item strong{

    color:#17345f;

}



.status{

color:#16a34a!important;

}



.button-area{

display:flex;

gap:15px;

margin-top:25px;

}



.btn{

flex:1;

padding:13px;

text-align:center;

border-radius:10px;

text-decoration:none;

}



.btn-edit{

background:#1976e8;

color:white;

}


.btn-password{

background:#fff3cd;

color:#856404;

}


.btn-back{

background:#eef5ff;

color:#17345f;

}


</style>


</head>


<body>


<div class="profile-container">


<div class="profile-box">


<div class="profile-header">


<div class="avatar">

@if(auth()->user()->foto)

<img src="{{ asset('storage/'.auth()->user()->foto) }}">

@else

{{ strtoupper(substr(auth()->user()->name,0,1)) }}

@endif



<form action="{{ route('admin.profile.foto') }}" 
method="POST" 
enctype="multipart/form-data">

@csrf

<label class="upload-btn">

+

<input type="file"
name="foto"
accept="image/*"
hidden
onchange="this.form.submit()">

</label>

</form>


</div>


<h2>

{{ auth()->user()->name }}

</h2>


<p>

Administrator UNIWARA

</p>


</div>



<hr>




<div class="info">


<div class="info-item">

<span>Nama Lengkap</span>

<strong>
{{ auth()->user()->name }}
</strong>

</div>




<div class="info-item">

<span>Email</span>

<strong>
{{ auth()->user()->email }}
</strong>

</div>



<div class="info-item">

<span>Jabatan</span>

<strong>
Admin UNIWARA
</strong>

</div>



<div class="info-item">

<span>Status Akun</span>

<strong class="status">
Aktif
</strong>

</div>



<div class="info-item">

<span>Akses</span>

<strong>
Administrator
</strong>

</div>


</div>





<div class="button-area">


<a href="{{ route('admin.profile.edit') }}"
class="btn btn-edit">

✏ Edit Profil

</a>



<a href="{{ route('admin.password') }}"
class="btn btn-password">

🔒 Ganti Password

</a>



<a href="{{ route('admin.dashboard') }}"
class="btn btn-back">

← Dashboard

</a>



</div>



</div>


</div>



</body>

</html>