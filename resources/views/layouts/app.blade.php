<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        UNIWARA - Universitas PGRI Wiranegara
    </title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;

            color: #333;

            background: #fff;
        }


        a {
            text-decoration: none;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            width: 100%;

            min-height: 70px;

            background: #F1F3F2;

            display: flex;

            align-items: center;

            padding: 0 7%;

            position: sticky;

            top: 0;

            z-index: 999;

            box-shadow:
                0 3px 15px
                rgba(0,0,0,0.08);

            border-bottom:
                1px solid #E2E5E3;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo {

            color: #555;

            font-size: 22px;

            font-weight: bold;

            margin-right: 60px;

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .logo img {

            width: 48px;

            height: 48px;

            object-fit: contain;
        }


        .logo span {

            color: #555;

            font-weight: 700;

            letter-spacing: .5px;
        }


        /* =====================================================
           MENU
        ===================================================== */

        .nav-menu {

            display: flex;

            align-items: center;

            gap: 32px;

            list-style: none;
        }


        .nav-menu li {

            position: relative;
        }


        .nav-menu a {

            position: relative;

            color: #555;

            font-size: 14px;

            font-weight: 600;

            padding: 25px 0;

            transition:
                color .3s ease;
        }


        /* GARIS BAWAH HOVER */

        .nav-menu a::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: 17px;

            width: 0;

            height: 2px;

            background: #7B1E18;

            transition:
                width .3s ease;
        }


        .nav-menu a:hover {

            color: #7B1E18;
        }


        .nav-menu a:hover::after {

            width: 100%;
        }


        /* =====================================================
           RESPONSIVE TABLET
        ===================================================== */

        @media (max-width: 900px) {

            .navbar {

                padding: 0 5%;
            }


            .logo {

                margin-right: 30px;
            }


            .nav-menu {

                gap: 20px;
            }

        }


        /* =====================================================
           RESPONSIVE HP
        ===================================================== */

        @media (max-width: 600px) {

            .navbar {

                padding:
                    12px 20px;

                flex-direction: column;

                gap: 10px;
            }


            .logo {

                margin-right: 0;
            }


            .nav-menu {

                gap: 18px;

                flex-wrap: wrap;

                justify-content: center;
            }


            .nav-menu a {

                padding: 8px 0;

                font-size: 13px;
            }


            .nav-menu a::after {

                bottom: 2px;
            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ===================================================== -->

    <nav class="navbar">


        <!-- LOGO -->

        <div class="logo">

            <img
                src="{{ asset('image/uniwara.png') }}"
                alt="Logo UNIWARA"
            >

            <span>
                UNIWARA
            </span>

        </div>


        <!-- MENU -->

        <ul class="nav-menu">


            <!-- BERANDA -->

            <li>

                <a href="/">

                    Beranda

                </a>

            </li>


            <!-- TENTANG -->

            <li>

                <a href="/tentang">

                    Tentang

                </a>

            </li>


            <!-- INFORMASI -->

            <li>

                <a href="/informasi">

                    Informasi

                </a>

            </li>


            <!-- PROGRAM STUDI -->

            <li>

                <a href="{{ route('program.studi') }}">

                    Program Studi

                </a>

            </li>


        </ul>


    </nav>


    <!-- =====================================================
         ISI HALAMAN
    ===================================================== -->

    @yield('content')


</body>

</html>