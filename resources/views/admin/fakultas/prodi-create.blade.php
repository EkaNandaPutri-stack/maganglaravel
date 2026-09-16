<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tambah Program Studi - UNIWARA</title>

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
            max-width: 750px;
            margin: auto;
            padding: 40px 20px;
        }

        .panel {
            background: white;
            border: 1px solid #dce6f1;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(30,72,118,.06);
        }

        h1 {
            margin: 0 0 8px;
            color: #12345f;
        }

        .description {
            color: #718096;
            font-size: 13px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin: 18px 0 7px;
            font-size: 13px;
            font-weight: bold;
            color: #183452;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d7e0e9;
            border-radius: 7px;
            font-size: 14px;
            background: white;
        }

        input:focus,
        select:focus {
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
            margin-top: 28px;
        }

        .button {
            border: none;
            border-radius: 7px;
            padding: 11px 16px;
            background: #18a36b;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .gray {
            background: #e8eef5;
            color: #34495e;
        }

        .hint {
            margin-top: 6px;
            font-size: 11px;
            color: #8a989f;
        }

    </style>

</head>

<body>

<main class="page">

    <section class="panel">

        <h1>
            Tambah Program Studi
        </h1>

        <p class="description">
            Tambahkan program studi beserta kuota mahasiswa dan jumlah kelas.
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
            action="{{ route('admin.program-studi.store') }}"
            method="POST"
        >

            @csrf


            <label for="fakultas_id">
                Fakultas
            </label>

            <select
                id="fakultas_id"
                name="fakultas_id"
                required
            >

                <option value="">
                    -- Pilih Fakultas --
                </option>

                @foreach($fakultas as $item)

                    <option
                        value="{{ $item->id }}"
                        @selected(old('fakultas_id') == $item->id)
                    >
                        {{ $item->nama_fakultas }}
                    </option>

                @endforeach

            </select>


            <label for="nama_prodi">
                Nama Program Studi
            </label>

            <input
                type="text"
                id="nama_prodi"
                name="nama_prodi"
                value="{{ old('nama_prodi') }}"
                placeholder="Contoh: Ilmu Komputer"
                required
            >


            <label for="kuota_mahasiswa">
                Kuota Mahasiswa
            </label>

            <input
                type="number"
                id="kuota_mahasiswa"
                name="kuota_mahasiswa"
                value="{{ old('kuota_mahasiswa', 0) }}"
                min="0"
                required
            >

            <div class="hint">
                Masukkan jumlah maksimal mahasiswa yang diterima.
            </div>


            <label for="jumlah_kelas">
                Jumlah Kelas
            </label>

            <input
                type="number"
                id="jumlah_kelas"
                name="jumlah_kelas"
                value="{{ old('jumlah_kelas', 0) }}"
                min="0"
                required
            >

            <div class="hint">
                Contoh: 3 berarti program studi memiliki 3 kelas.
            </div>


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
                    Simpan Program Studi
                </button>

            </div>

        </form>

    </section>

</main>

</body>

</html>