<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola Pengumuman - UNIWARA</title>


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

    margin-bottom:30px;

    border:1px solid #d7e6fa;

}



.hero-icon{

    width:65px;

    height:65px;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#1976ed;

    color:white;

    border-radius:18px;

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

    background:#e8f8ef;

    border:1px solid #c8eed9;

    color:#177348;

    border-radius:12px;

    margin-bottom:20px;

}





/* PANEL */

.panel{

    background:white;

    padding:30px;

    border-radius:20px;

    border:1px solid #e1e9f3;

    box-shadow:
    0 8px 25px rgba(30,60,100,.08);

}



.panel-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:25px;

}



.panel-title h2{

    margin:0;

    font-size:22px;

}



.panel-title p{

    margin-top:7px;

    color:#8495ad;

    font-size:13px;

}





/* TABLE */

.table-wrapper{

    width:100%;

    overflow-x:auto;

    border-radius:14px;

}



table{

    width:100%;

    border-collapse:collapse;

    table-layout:fixed;

}



th{

    background:#f7faff;

    padding:16px;

    text-align:left;

    font-size:12px;

    color:#64748b;

}



td{

    padding:18px 16px;

    border-bottom:1px solid #edf1f5;

    font-size:14px;

}



tbody tr:hover{

    background:#f9fbff;

}



th:nth-child(1),
td:nth-child(1){

    width:55%;

}



th:nth-child(2),
td:nth-child(2){

    width:25%;

}



th:nth-child(3),
td:nth-child(3){

    width:20%;

}



.announcement-title{

    font-weight:700;

    color:#173b69;

}



.date{

    display:flex;

    align-items:center;

    gap:8px;

}



.date-icon{

    width:32px;

    height:32px;

    border-radius:8px;

    background:#eaf3ff;

    display:flex;

    align-items:center;

    justify-content:center;

}



.actions{

    display:flex;

    gap:8px;

}



.actions .button{

    padding:8px 12px;

    font-size:12px;

}



form{

    margin:0;

}



.empty{

    text-align:center;

    padding:60px;

    color:#64748b;

}

/* ================================
   ANIMASI HALAMAN PENGUMUMAN
================================ */


/* Halaman masuk */
.page-transition{
    animation: pageEnter 0.6s ease;
}


@keyframes pageEnter{

    from{
        opacity:0;
        transform:translateY(25px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Tombol kembali */
.page > div:first-child{

    animation: slideDown .5s ease;

}


@keyframes slideDown{

    from{
        opacity:0;
        transform:translateY(-20px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Hero */
.hero{

    animation: heroShow .7s ease;

}


@keyframes heroShow{

    from{
        opacity:0;
        transform:translateX(-40px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }

}



/* Panel */
.panel{

    animation: panelShow .8s ease;

}


@keyframes panelShow{

    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}



/* Data tabel muncul bertahap */

tbody tr{

    opacity:0;
    animation: tableShow .5s ease forwards;

}


tbody tr:nth-child(1){
    animation-delay:.1s;
}

tbody tr:nth-child(2){
    animation-delay:.2s;
}

tbody tr:nth-child(3){
    animation-delay:.3s;
}

tbody tr:nth-child(4){
    animation-delay:.4s;
}

tbody tr:nth-child(5){
    animation-delay:.5s;
}



@keyframes tableShow{

    from{
        opacity:0;
        transform:translateX(20px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }

}



/* Hover tombol */

.button,
.small-button{

    transition:.3s ease;

}


.button:hover,
.small-button:hover{

    transform:translateY(-3px);

}

</style>

</head>
<body class="page-transition">


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


        <div class="hero-content">


            <div class="hero-icon">

                📢

            </div>



            <h1>

                Kelola Pengumuman

            </h1>



            <p>

                Kelola seluruh pengumuman yang tersedia
                di website kampus.

            </p>


        </div>


    </section>








    {{-- ALERT --}}



    @if(session('success'))


        <div class="alert">


            ✓ {{ session('success') }}


        </div>


    @endif







    {{-- PANEL --}}


    <section class="panel">



        <div class="panel-header">



            <div class="panel-title">


                <h2>

                    Daftar Pengumuman

                </h2>


                <p>

                    Kelola seluruh pengumuman yang tersedia
                    di website kampus.

                </p>


            </div>





            <a

                href="{{ route('admin.pengumuman.create') }}"

                class="button">


                ＋ Tambah Pengumuman


            </a>



        </div>








        @if($pengumuman->isEmpty())




            <div class="empty">



                <h3>

                    Belum Ada Pengumuman

                </h3>



                <p>

                    Klik tombol "Tambah Pengumuman"
                    untuk membuat pengumuman pertama.

                </p>



            </div>






        @else







        <div class="table-wrapper">


            <table>



                <thead>


                    <tr>


                        <th>

                            Judul Pengumuman

                        </th>



                        <th>

                            Tanggal

                        </th>



                        <th>

                            Aksi

                        </th>


                    </tr>


                </thead>







                <tbody>




                @foreach($pengumuman as $item)



                    <tr>





                        {{-- JUDUL --}}



                        <td>


                            <div class="announcement-title">


                                {{ $item->judul }}


                            </div>


                        </td>








                        {{-- TANGGAL --}}



                        <td>


                            <div class="date">


                                <span class="date-icon">


                                    📅


                                </span>



                                <span>


                                    {{ $item->tanggal?->format('d/m/Y') }}


                                </span>



                            </div>


                        </td>








                        {{-- AKSI --}}



                        <td>


                            <div class="actions">





                                <a

                                    href="{{ route('admin.pengumuman.edit',$item) }}"

                                    class="button secondary">


                                    ✏ Edit


                                </a>








                                <form

                                    action="{{ route('admin.pengumuman.destroy',$item) }}"

                                    method="POST"

                                    onsubmit="return confirm('Hapus pengumuman ini?')">


                                    @csrf


                                    @method('DELETE')





                                    <button

                                        type="submit"

                                        class="button danger">


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