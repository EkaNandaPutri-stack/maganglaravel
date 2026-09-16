<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $formTitle }} - UNIWARA</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; background: #f4f7fb; color: #172b4d; }
        .page { max-width: 820px; margin: 0 auto; padding: 30px; }
        .panel { background: white; border: 1px solid #e5eaf0; border-radius: 7px; padding: 24px; }
        h1 { margin: 0 0 22px; font-size: 25px; color: #142c4d; }
        label { display: block; margin: 16px 0 7px; font-size: 13px; font-weight: bold; color: #183452; }
        input, textarea { width: 100%; border: 1px solid #d7e0e9; border-radius: 5px; padding: 11px 12px; font: inherit; color: #172b4d; }
        textarea { min-height: 180px; resize: vertical; }
        input:focus, textarea:focus { outline: 2px solid #b8d9fb; border-color: #1976e8; }
        .error { margin: 0 0 14px; padding: 11px 14px; border-radius: 5px; background: #fdeaea; color: #a52e2e; font-size: 13px; }
        .error ul { margin: 0; padding-left: 18px; }
        .actions { display: flex; gap: 9px; margin-top: 24px; }
        .button { border: 0; border-radius: 6px; padding: 11px 16px; background: #1976e8; color: white; text-decoration: none; font-size: 13px; cursor: pointer; }
        .button.secondary { background: #e8eef5; color: #34495e; }
        small { color: #718096; }
        @media (max-width: 600px) { .page { padding: 20px 14px; } .panel { padding: 18px; } }
    </style>
</head>
<body>
    <main class="page">
        <section class="panel">
            <h1>{{ $formTitle }}</h1>

            @if ($errors->any())
                <div class="error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif

            <form action="{{ $formAction }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($formMethod !== 'POST') @method($formMethod) @endif

                <label for="judul">Judul Pengumuman</label>
                <input id="judul" name="judul" type="text" value="{{ old('judul', $pengumuman->judul) }}" required>

                <label for="isi">Isi Pengumuman</label>
                <textarea id="isi" name="isi" required>{{ old('isi', $pengumuman->isi) }}</textarea>

                <label for="tanggal">Tanggal</label>
                <input id="tanggal" name="tanggal" type="date" value="{{ old('tanggal', $pengumuman->tanggal?->format('Y-m-d')) }}" required>

                <label for="gambar">Foto Pengumuman (opsional)</label>
                <input id="gambar" name="gambar" type="file" accept="image/jpeg,image/png,image/webp">
                <small>Pilih foto JPG, PNG, atau WEBP. Maksimal 5 MB.</small>

                @if ($pengumuman->gambar)
                    <p>Foto saat ini: {{ basename($pengumuman->gambar) }}</p>
                @endif

                <div class="actions">
                    <a class="button secondary" href="{{ route('admin.pengumuman.index') }}">Batal</a>
                    <button class="button" type="submit">Simpan Pengumuman</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
