<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function index(): View
    {
        $berita = Berita::latest('tanggal')->latest('id')->get();

        return view('admin.berita.index', compact('berita'));
    }

    public function create(): View
    {
        return view('admin.berita.form', [
            'berita' => new Berita,
            'formTitle' => 'Tambah Berita',
            'formAction' => route('admin.berita.store'),
            'formMethod' => 'POST',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate($this->rules());

        $data['gambar'] = $request->hasFile('gambar')
            ? $request->file('gambar')->store('berita', 'public')
            : null;

        Berita::create($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita): View
    {
        return view('admin.berita.form', [
            'berita' => $berita,
            'formTitle' => 'Edit Berita',
            'formAction' => route('admin.berita.update', $berita),
            'formMethod' => 'PUT',
        ]);
    }

    public function update(Request $request, Berita $berita): RedirectResponse
    {
        $data = $request->validate($this->rules());

        if ($request->hasFile('gambar')) {
            $this->deleteStoredImage($berita->gambar);
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        } else {
            unset($data['gambar']);
        }

        $berita->update($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita): RedirectResponse
    {
        $this->deleteStoredImage($berita->gambar);
        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }

    /**
     * @return array<string, array<int, string>>
     */
    private function rules(): array
    {
        return [
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:5120'],
            'tanggal' => ['required', 'date'],
            'penulis' => ['nullable', 'string', 'max:255'],
        ];
    }

    private function deleteStoredImage(?string $path): void
    {
        if ($path !== null && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
