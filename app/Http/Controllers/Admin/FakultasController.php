<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FakultasController extends Controller
{
    /**
     * Menampilkan semua fakultas dan program studi.
     */
    public function index(): View
    {
        $fakultas = Fakultas::with('programStudis')
            ->orderBy('nama_fakultas')
            ->get();

        $jumlahFakultas = Fakultas::count();
        $jumlahProdi = ProgramStudi::count();
        $totalKuota = ProgramStudi::sum('kuota_mahasiswa');
        $totalKelas = ProgramStudi::sum('jumlah_kelas');

        return view('admin.fakultas.index', compact(
            'fakultas',
            'jumlahFakultas',
            'jumlahProdi',
            'totalKuota',
            'totalKelas'
        ));
    }

    /**
     * Form tambah fakultas.
     */
    public function create(): View
    {
        return view('admin.fakultas.create');
    }

    /**
     * Menyimpan fakultas baru.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama_fakultas' => [
                'required',
                'string',
                'max:255',
                'unique:fakultas,nama_fakultas',
            ],
        ], [
            'nama_fakultas.required' => 'Nama fakultas wajib diisi.',
            'nama_fakultas.unique' => 'Nama fakultas sudah ada.',
        ]);

        Fakultas::create($data);

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Fakultas berhasil ditambahkan.');
    }

    /**
     * Form edit fakultas.
     */
    public function edit(Fakultas $fakultas): View
    {
        return view('admin.fakultas.edit', compact('fakultas'));
    }

    /**
     * Update fakultas.
     */
    public function update(
        Request $request,
        Fakultas $fakultas
    ): RedirectResponse {
        $data = $request->validate([
            'nama_fakultas' => [
                'required',
                'string',
                'max:255',
                'unique:fakultas,nama_fakultas,' . $fakultas->id,
            ],
        ], [
            'nama_fakultas.required' => 'Nama fakultas wajib diisi.',
            'nama_fakultas.unique' => 'Nama fakultas sudah ada.',
        ]);

        $fakultas->update($data);

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Fakultas berhasil diperbarui.');
    }

    /**
     * Hapus fakultas.
     */
    public function destroy(Fakultas $fakultas): RedirectResponse
    {
        if ($fakultas->programStudis()->count() > 0) {
            return redirect()
                ->route('admin.fakultas.index')
                ->with(
                    'error',
                    'Fakultas tidak dapat dihapus karena masih memiliki program studi.'
                );
        }

        $fakultas->delete();

        return redirect()
            ->route('admin.fakultas.index')
            ->with('success', 'Fakultas berhasil dihapus.');
    }
}