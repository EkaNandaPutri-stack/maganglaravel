<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Portal Admin - UNIWARA</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #F3F8FC;

            min-height: 100vh;

        }


        /* =====================================================
           HALAMAN
        ===================================================== */

        .admin-page {

            min-height: 100vh;

            display: flex;

        }


        /* =====================================================
           BAGIAN KIRI
        ===================================================== */

        .admin-left {

            width: 47%;

            min-height: 100vh;

            position: relative;

            overflow: hidden;

            display: flex;

            align-items: center;

            padding: 70px;

            background:

                linear-gradient(
                    rgba(25, 92, 150, .60),
                    rgba(25, 92, 150, .30)
                ),

                url('{{ asset('image/admin-campus.jpg') }}');

            background-size: cover;

            background-position: center;

        }


        .admin-left::after {

            content: "";

            position: absolute;

            inset: 0;

            background:

                linear-gradient(
                    135deg,
                    rgba(18, 91, 155, .55),
                    rgba(111, 182, 214, .05)
                );

        }


        .admin-left-content {

            position: relative;

            z-index: 2;

            color: white;

            max-width: 450px;

        }


        .admin-left-content h1 {

            font-size: 36px;

            line-height: 1.2;

            margin-bottom: 18px;

        }


        .admin-left-content p {

            font-size: 15px;

            line-height: 1.7;

        }


        .admin-left-content .small {

            margin-top: 5px;

            font-size: 13px;

        }


        /* =====================================================
           BAGIAN KANAN
        ===================================================== */

        .admin-right {

            width: 53%;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 40px;

        }


        /* =====================================================
           CARD
        ===================================================== */

        .login-card {

            width: 100%;

            max-width: 430px;

            background: white;

            padding: 42px 38px;

            border-radius: 8px;

            box-shadow:
                0 15px 45px rgba(40, 80, 110, .10);

            animation: muncul .7s ease;

        }


        /* =====================================================
           LOGO
        ===================================================== */

        .admin-logo {

            text-align: center;

            margin-bottom: 10px;

        }


        .admin-logo img {

            width: 65px;

            height: 65px;

            object-fit: contain;

        }


        .logo-icon {

            font-size: 55px;

            color: #1675D1;

        }


        /* =====================================================
           JUDUL
        ===================================================== */

        .login-card h2 {

            text-align: center;

            color: #263F56;

            font-size: 27px;

            margin-bottom: 8px;

        }


        .login-card .subtitle {

            text-align: center;

            color: #71818A;

            font-size: 12px;

            margin-bottom: 28px;

        }


        /* =====================================================
           INPUT
        ===================================================== */

        .form-group {

            margin-bottom: 18px;

        }


        .form-group label {

            display: block;

            font-size: 12px;

            font-weight: 600;

            color: #40576B;

            margin-bottom: 7px;

        }


        .input-box {

            position: relative;

        }


        .input-box span.icon {

            position: absolute;

            left: 14px;

            top: 50%;

            transform: translateY(-50%);

            font-size: 16px;

            color: #71818A;

        }


        .input-box input {

            width: 100%;

            height: 46px;

            border: 1px solid #D7E1E8;

            border-radius: 6px;

            outline: none;

            padding: 0 42px;

            font-size: 13px;

            color: #334E68;

            transition: .3s;

        }


        .input-box input:focus {

            border-color: #2581E8;

            box-shadow:
                0 0 0 3px rgba(37,129,232,.08);

        }


        .eye {

            position: absolute;

            right: 14px;

            top: 50%;

            transform: translateY(-50%);

            cursor: pointer;

            color: #71818A;

        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .login-button {

            width: 100%;

            height: 46px;

            border: none;

            border-radius: 6px;

            background: #1877E8;

            color: white;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            margin-top: 5px;

            transition: .3s;

        }


        .login-button:hover {

            background: #1266C7;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(24,119,232,.20);

        }


        /* =====================================================
           KEMBALI
        ===================================================== */

        .back-home {

            display: block;

            text-align: center;

            margin-top: 23px;

            text-decoration: none;

            color: #1769C2;

            font-size: 11px;

            font-weight: 600;

        }


        .back-home:hover {

            color: #0D4F8F;

        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error-message {

            background: #FFF1F1;

            color: #C0392B;

            border: 1px solid #FFD2D2;

            padding: 10px 12px;

            border-radius: 5px;

            font-size: 11px;

            margin-bottom: 18px;

        }


        /* =====================================================
           ANIMASI
        ===================================================== */

        @keyframes muncul {

            from {

                opacity: 0;

                transform: translateY(25px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 800px) {

            .admin-page {

                display: block;

            }


            .admin-left {

                width: 100%;

                min-height: 300px;

                padding: 50px 30px;

            }


            .admin-left-content h1 {

                font-size: 28px;

            }


            .admin-right {

                width: 100%;

                min-height: auto;

                padding: 35px 20px;

            }

        }


        @media(max-width: 500px) {

            .admin-left {

                min-height: 250px;

            }


            .admin-left-content h1 {

                font-size: 24px;

            }


            .login-card {

                padding: 35px 25px;

            }

        }

    </style>

</head>


<body>


<div class="admin-page">


    <!-- =====================================================
         KIRI
    ====================================================== -->

    <section class="admin-left">

        <div class="admin-left-content">

            <h1>

                Bersama Membangun
                <br>

                Masa Depan Pendidikan

            </h1>


            <p>

                Sistem Informasi Akademik

            </p>


            <p class="small">

                Universitas PGRI Wiranegara

            </p>

        </div>

    </section>



    <!-- =====================================================
         KANAN
    ====================================================== -->

    <section class="admin-right">


        <div class="login-card">


            <!-- LOGO -->

            <div class="admin-logo">

                <div class="logo-icon">
                    🎓
                </div>

            </div>


            <!-- JUDUL -->

            <h2>
                Login Admin
            </h2>


            <p class="subtitle">

                Silakan masuk untuk melanjutkan
                ke dashboard admin

            </p>


            <!-- ERROR -->

            @if ($errors->any())

                <div class="error-message">

                    {{ $errors->first() }}

                </div>

            @endif


            <!-- FORM -->

            <form
                action="{{ route('admin.login.process') }}"
                method="POST"
            >

                @csrf


                <!-- USERNAME -->

                <div class="form-group">

                    <label>
                        Username
                    </label>


                    <div class="input-box">

                        <span class="icon">
                            ♙
                        </span>


                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email"
                            required
                        >

                    </div>

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label>
                        Password
                    </label>


                    <div class="input-box">

                        <span class="icon">
                            🔒
                        </span>


                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Password"
                            required
                        >


                        <span
                            class="eye"
                            onclick="togglePassword()"
                        >
                            👁
                        </span>

                    </div>

                </div>


                <!-- LOGIN -->

                <button
                    type="submit"
                    class="login-button"
                >

                    Login

                </button>


            </form>


            <!-- KEMBALI -->

            <a
                href="/"
                class="back-home"
            >

                Kembali ke Beranda

            </a>


        </div>


    </section>


</div>



<script>

function togglePassword() {

    const password =
        document.getElementById('password');

    const eye =
        document.querySelector('.eye');


    if (password.type === 'password') {

        password.type = 'text';

        eye.innerHTML = '🙈';

    } else {

        password.type = 'password';

        eye.innerHTML = '👁';

    }

}

</script>


</body>

</html>