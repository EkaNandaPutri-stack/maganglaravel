<!DOCTYPE html>
<html lang="id">

<head>

<title>Ganti Password</title>


<style>

body{

font-family:Arial;
background:#eef5ff;

}


.password-box{

width:500px;

margin:50px auto;

background:white;

padding:35px;

border-radius:20px;

box-shadow:0 10px 30px rgba(0,0,0,.1);

}


h2{

text-align:center;

color:#17345f;

}


label{

display:block;

margin-top:15px;

color:#718096;

}


input{

width:100%;

padding:12px;

margin-top:5px;

border:1px solid #ddd;

border-radius:10px;

}



button{

width:100%;

margin-top:25px;

padding:13px;

background:#1976e8;

color:white;

border:none;

border-radius:10px;

cursor:pointer;

}


.back{

display:block;

text-align:center;

margin-top:15px;

text-decoration:none;

color:#1976e8;

}

</style>


</head>


<body>


<div class="password-box">


<h2>
🔒 Ganti Password
</h2>



<form action="{{ route('admin.password.update') }}" method="POST">


@csrf


<label>
Password Lama
</label>

<input type="password"
name="password_lama"
required>



<label>
Password Baru
</label>

<input type="password"
name="password_baru"
required>



<label>
Konfirmasi Password Baru
</label>

<input type="password"
name="password_baru_confirmation"
required>




<button>
Simpan Password
</button>


</form>



<a class="back" href="{{ route('admin.profile') }}">
← Kembali ke Profil
</a>


</div>


</body>

</html>