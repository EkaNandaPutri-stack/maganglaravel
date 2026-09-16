<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProgramStudiController extends Controller
{
    /**
     * Form tambah program studi.
     */
    public function create(): View
    {
        $fakultas = Fakultas::orderBy('nama_fakultas')->get();

        return view('admin.fakultas.prodi-create', compact('fakultas'));
    }

    /**
     * Menyimpan program studi.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'fakultas_id' => [
                'required',
                'exists:fakultas,id',
            ],

            'nama_prodi' => [
                'required',
                'string',
                'max:255',
            ],

            'kuota_mahasiswa' => [
                'required',
                'integer',
                'min:0',
            ],

            'jumlah_kelas' => [
                'required',
                'integer',
                'min:0',
            ],
        ], [
            'fakultas_id.required' => 'Fakultas wajib dipilih.',
            'fakultas_id.exists' => 'Fakultas tidak ditemukan.',
            'nama_prodi.required' => 'Nama program studi wajib diisi.',
            'kuota_mahasiswa.required' => 'Kuota mahasiswa wajib diisi.',
            'kuota_mahasiswa.integer' => 'Kuota mahasiswa harus berupa angka.',
            'jumlah_kelas.required' => 'Jumlah kelas wajib diisi.',
            'jumlah_kelas.integer' => 'Jumlah kelas harus berupa angka.',
        ]);

        ProgramStudi::create($data);

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Program studi berhasil ditambahkan.');
    }

    /**
     * Form edit program studi.
     */
    public function edit(ProgramStudi $programStudi): View
    {
        $fakultas = Fakultas::orderBy('nama_fakultas')->get();

        return view(
            'admin.fakultas.prodi-edit',
            compact('programStudi', 'fakultas')
        );
    }

    /**
     * Update program studi.
     */
    public function update(
        Request $request,
        ProgramStudi $programStudi
    ): RedirectResponse {
        $data = $request->validate([
            'fakultas_id' => [
                'required',
                'exists:fakultas,id',
            ],

            'nama_prodi' => [
                'required',
                'string',
                'max:255',
            ],

            'kuota_mahasiswa' => [
                'required',
                'integer',
                'min:0',
            ],

            'jumlah_kelas' => [
                'required',
                'integer',
                'min:0',
            ],
        ]);

        $programStudi->update($data);

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Program studi berhasil diperbarui.');
    }

    /**
     * Hapus program studi.
     */
    public function destroy(
        ProgramStudi $programStudi
    ): RedirectResponse {
        $programStudi->delete();

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Program studi berhasil dihapus.');
    }
}