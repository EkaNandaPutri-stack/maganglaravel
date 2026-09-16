<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Fakultas - UNIWARA</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #172b4d;
        }

        .page {
            max-width: 700px;
            margin: auto;
            padding: 40px 20px;
        }

        .panel {
            background: white;
            border: 1px solid #dce6f1;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 5px 18px rgba(30,72,118,.06);
        }

        h1 {
            margin: 0 0 8px;
            color: #12345f;
        }

        .description {
            margin-bottom: 25px;
            color: #718096;
            font-size: 13px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 13px;
            font-weight: bold;
            color: #183452;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d7e0e9;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus {
            outline: 2px solid #b8d9fb;
            border-color: #1976e8;
        }

        .error {
            margin-bottom: 20px;
            padding: 12px 15px;
            border-radius: 7px;
            background: #fdeaea;
            color: #a52e2e;
            font-size: 13px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .button {
            border: none;
            border-radius: 7px;
            padding: 11px 16px;
            background: #1976e8;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .button.gray {
            background: #e8eef5;
            color: #34495e;
        }

    </style>

</head>

<body>

<main class="page">

    <section class="panel">

        <h1>
            Tambah Fakultas
        </h1>

        <p class="description">
            Masukkan nama fakultas baru.
        </p>


        @if($errors->any())

            <div class="error">

                <ul style="margin:0;padding-left:18px;">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('admin.fakultas.store') }}"
            method="POST"
        >

            @csrf


            <label for="nama_fakultas">
                Nama Fakultas
            </label>

            <input
                type="text"
                id="nama_fakultas"
                name="nama_fakultas"
                value="{{ old('nama_fakultas') }}"
                placeholder="Contoh: Fakultas Teknik"
                required
            >


            <div class="actions">

                <a
                    href="{{ route('admin.fakultas.index') }}"
                    class="button gray"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="button"
                >
                    Simpan Fakultas
                </button>

            </div>

        </form>

    </section>

</main>

</body>

</html>