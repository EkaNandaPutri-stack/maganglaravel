<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PengumumanController extends Controller
{
    public function index(): View
    {
        $pengumuman = Pengumuman::latest('tanggal')->latest('id')->get();

        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create(): View
    {
        return view('admin.pengumuman.form', [
            'pengumuman' => new Pengumuman,
            'formTitle' => 'Tambah Pengumuman',
            'formAction' => route('admin.pengumuman.store'),
            'formMethod' => 'POST',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate($this->rules());
        $data['gambar'] = $request->hasFile('gambar')
            ? $request->file('gambar')->store('pengumuman', 'public')
            : null;

        Pengumuman::create($data);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit(Pengumuman $pengumuman): View
    {
        return view('admin.pengumuman.form', [
            'pengumuman' => $pengumuman,
            'formTitle' => 'Edit Pengumuman',
            'formAction' => route('admin.pengumuman.update', $pengumuman),
            'formMethod' => 'PUT',
        ]);
    }

    public function update(Request $request, Pengumuman $pengumuman): RedirectResponse
    {
        $data = $request->validate($this->rules());

        if ($request->hasFile('gambar')) {
            $this->deleteStoredImage($pengumuman->gambar);
            $data['gambar'] = $request->file('gambar')->store('pengumuman', 'public');
        } else {
            unset($data['gambar']);
        }

        $pengumuman->update($data);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy(Pengumuman $pengumuman): RedirectResponse
    {
        $this->deleteStoredImage($pengumuman->gambar);
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
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
        ];
    }

    private function deleteStoredImage(?string $path): void
    {
        if ($path !== null && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
