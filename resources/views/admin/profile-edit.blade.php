<!DOCTYPE html>
<html lang="id">

<head>

<title>Edit Profil Admin</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}


body{

    font-family:Arial, Helvetica, sans-serif;
    background:#eef5ff;

}


.edit-box{

    width:500px;

    margin:50px auto;

    background:white;

    padding:35px;

    border-radius:20px;

    box-shadow:0 10px 30px rgba(0,0,0,.1);

    animation:show .5s ease;

}



h2{

    text-align:center;

    color:#17345f;

    margin-bottom:25px;

}



label{

    display:block;

    margin-top:15px;

    color:#718096;

    font-size:14px;

}



input{

    width:100%;

    padding:12px;

    margin-top:7px;

    border:1px solid #ddd;

    border-radius:10px;

    outline:none;

}



input:focus{

    border-color:#1976e8;

}



button{

    width:100%;

    margin-top:25px;

    padding:13px;

    border:none;

    background:#1976e8;

    color:white;

    border-radius:10px;

    cursor:pointer;

    font-size:14px;

}



button:hover{

    background:#125bb5;

}



.back{

    display:block;

    text-align:center;

    margin-top:15px;

    text-decoration:none;

    color:#1976e8;

}



@keyframes show{

from{

opacity:0;

transform:translateY(20px);

}

to{

opacity:1;

transform:translateY(0);

}

}


</style>


</head>


<body>


<div class="edit-box">


<h2>
✏ Edit Profil Admin
</h2>



<form action="{{ route('admin.profile.update') }}" method="POST">


@csrf

@method('PUT')



<label>
Nama Lengkap
</label>


<input type="text" 
name="name"
value="{{ auth()->user()->name }}"
required>




<label>
Email
</label>


<input type="email"
name="email"
value="{{ auth()->user()->email }}"
required>




<label>
Jabatan
</label>


<input type="text"
value="Admin UNIWARA"
readonly>




<button type="submit">

Simpan Perubahan

</button>



</form>




<a class="back" href="{{ route('admin.profile') }}">

← Kembali

</a>



</div>



</body>

</html>