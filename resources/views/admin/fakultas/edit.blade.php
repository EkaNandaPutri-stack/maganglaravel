<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Fakultas - UNIWARA</title>

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
        }

        h1 {
            margin: 0 0 8px;
            color: #12345f;
        }

        p {
            color: #718096;
            font-size: 13px;
        }

        label {
            display: block;
            margin: 25px 0 7px;
            font-size: 13px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d7e0e9;
            border-radius: 7px;
        }

        .error {
            margin-top: 20px;
            padding: 12px;
            background: #fdeaea;
            color: #a52e2e;
            border-radius: 7px;
            font-size: 13px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .button {
            padding: 11px 16px;
            border: none;
            border-radius: 7px;
            background: #1976e8;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .gray {
            background: #e8eef5;
            color: #34495e;
        }

    </style>

</head>

<body>

<main class="page">

    <section class="panel">

        <h1>
            Edit Fakultas
        </h1>

        <p>
            Ubah nama fakultas.
        </p>


        @if($errors->any())

            <div class="error">

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif


        <form
            action="{{ route('admin.fakultas.update', $fakultas) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <label for="nama_fakultas">
                Nama Fakultas
            </label>

            <input
                type="text"
                id="nama_fakultas"
                name="nama_fakultas"
                value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}"
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
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </section>

</main>

</body>

</html>