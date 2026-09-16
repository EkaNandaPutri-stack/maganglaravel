<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KalenderAkademik;
use Illuminate\Http\Request;

class KalenderAkademikController extends Controller
{
public function index()
{
    $kalender = KalenderAkademik::orderBy('urutan','asc')
        ->orderBy('id','desc')
        ->get();


    return view(
        'admin.kalender-akademik.index',
        compact('kalender')
    );
}



    public function create()
    {
        return view(
            'admin.kalender-akademik.form',
            [
                'formTitle' => 'Tambah Agenda Kalender',

                'formAction' => route(
                    'admin.kalender-akademik.store'
                ),

                'formMethod' => 'POST',

                'kalender' => new KalenderAkademik()
            ]
        );
    }



    public function store(Request $request)
    {

        $data = $request->validate([

            'tahun_akademik' => 'required',
            'semester_gasal' => 'required',
            'kegiatan' => 'required',
            'semester_genap' => 'nullable',
            'urutan' => 'nullable|integer',
            'aktif' => 'nullable'

        ]);


        KalenderAkademik::create([

            'tahun_akademik' => $data['tahun_akademik'],

            'semester_gasal' => $data['semester_gasal'],

            'kegiatan' => $data['kegiatan'],

            'semester_genap' => $data['semester_genap'] ?? null,

            'urutan' => $data['urutan'] ?? 0,

            'aktif' => $request->aktif ? 1 : 0,

        ]);


        return redirect()
            ->route('admin.kalender-akademik.index')
            ->with(
                'success',
                'Agenda kalender berhasil ditambahkan'
            );

    }




    public function edit(KalenderAkademik $kalenderAkademik)
    {

        return view(
            'admin.kalender-akademik.form',
            [

                'formTitle' => 'Edit Agenda Kalender',

                'formAction' => route(
                    'admin.kalender-akademik.update',
                    $kalenderAkademik
                ),

                'formMethod' => 'PUT',

                'kalender' => $kalenderAkademik

            ]
        );

    }





    public function update(Request $request, KalenderAkademik $kalenderAkademik)
    {

        $data = $request->validate([

            'tahun_akademik' => 'required',
            'semester_gasal' => 'required',
            'kegiatan' => 'required',
            'semester_genap' => 'nullable',
            'urutan' => 'nullable|integer',
            'aktif' => 'nullable'

        ]);



        $kalenderAkademik->update([

            'tahun_akademik' => $data['tahun_akademik'],

            'semester_gasal' => $data['semester_gasal'],

            'kegiatan' => $data['kegiatan'],

            'semester_genap' => $data['semester_genap'] ?? null,

            'urutan' => $data['urutan'] ?? 0,

            'aktif' => $request->aktif ? 1 : 0,

        ]);



        return redirect()
            ->route('admin.kalender-akademik.index')
            ->with(
                'success',
                'Agenda kalender berhasil diperbarui'
            );

    }





    public function destroy(KalenderAkademik $kalenderAkademik)
    {

        $kalenderAkademik->delete();


        return redirect()
            ->route('admin.kalender-akademik.index')
            ->with(
                'success',
                'Agenda kalender berhasil dihapus'
            );

    }

}