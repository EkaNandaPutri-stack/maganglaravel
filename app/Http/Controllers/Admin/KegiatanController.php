<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class KegiatanController extends Controller
{
    public function index(): View
    {
        $kegiatan = Kegiatan::latest('tanggal')->latest('id')->get();

        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    public function create(): View
    {
        return view('admin.kegiatan.form', [
            'kegiatan' => new Kegiatan,
            'formTitle' => 'Tambah Kegiatan',
            'formAction' => route('admin.kegiatan.store'),
            'formMethod' => 'POST',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate($this->rules());
        $data['gambar'] = $request->hasFile('gambar')
            ? $request->file('gambar')->store('kegiatan', 'public')
            : null;

        Kegiatan::create($data);

        return redirect()->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit(Kegiatan $kegiatan): View
    {
        return view('admin.kegiatan.form', [
            'kegiatan' => $kegiatan,
            'formTitle' => 'Edit Kegiatan',
            'formAction' => route('admin.kegiatan.update', $kegiatan),
            'formMethod' => 'PUT',
        ]);
    }

    public function update(Request $request, Kegiatan $kegiatan): RedirectResponse
    {
        $data = $request->validate($this->rules());

        if ($request->hasFile('gambar')) {
            $this->deleteStoredImage($kegiatan->gambar);
            $data['gambar'] = $request->file('gambar')->store('kegiatan', 'public');
        } else {
            unset($data['gambar']);
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan): RedirectResponse
    {
        $this->deleteStoredImage($kegiatan->gambar);
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil dihapus.');
    }

    /**
     * @return array<string, array<int, string>>
     */
    private function rules(): array
    {
        return [
            'nama_kegiatan' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'tanggal' => ['required', 'date'],
            'lokasi' => ['nullable', 'string', 'max:255'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:5120'],
        ];
    }

    private function deleteStoredImage(?string $path): void
    {
        if ($path !== null && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
