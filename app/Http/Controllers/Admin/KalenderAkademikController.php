<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KalenderAkademik;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class KalenderAkademikController extends Controller
{


    public function index(): View
    {

        $kalender = KalenderAkademik::orderBy('urutan','asc')
            ->orderBy('id','desc')
            ->get();


        return view(
            'admin.kalender-akademik.index',
            compact('kalender')
        );

    }




    public function create(): View
    {

        return view(
            'admin.kalender-akademik.form',
            [

                'kalender'=>new KalenderAkademik(),

                'formTitle'=>'Tambah Agenda Kalender',

                'formAction'=>route(
                    'admin.kalender-akademik.store'
                ),

                'formMethod'=>'POST',

            ]
        );

    }




    public function store(Request $request): RedirectResponse
    {


        $data=$request->validate([

            'tahun_akademik'=>'required',

            'semester_gasal'=>'required',

            'kegiatan'=>'required',

            'semester_genap'=>'nullable',

            'urutan'=>'nullable|integer',

            'aktif'=>'nullable'

        ]);



        KalenderAkademik::create([


            'tahun_akademik'=>$data['tahun_akademik'],

            'semester_gasal'=>$data['semester_gasal'],

            'kegiatan'=>$data['kegiatan'],

            'semester_genap'=>$data['semester_genap'] ?? null,

            'urutan'=>$data['urutan'] ?? 0,

            'aktif'=>$request->aktif ? 1 : 0,


        ]);




        return redirect()
            ->route('admin.kalender-akademik.index')
            ->with(
                'success',
                'Agenda kalender berhasil ditambahkan'
            );


    }





    public function edit(KalenderAkademik $kalenderAkademik): View
    {


        return view(
            'admin.kalender-akademik.form',
            [

                'kalender'=>$kalenderAkademik,

                'formTitle'=>'Edit Agenda Kalender',

                'formAction'=>route(
                    'admin.kalender-akademik.update',
                    $kalenderAkademik
                ),

                'formMethod'=>'PUT',

            ]
        );

    }






    public function update(
        Request $request,
        KalenderAkademik $kalenderAkademik
    ): RedirectResponse
    {


        $data=$request->validate([

            'tahun_akademik'=>'required',

            'semester_gasal'=>'required',

            'kegiatan'=>'required',

            'semester_genap'=>'nullable',

            'urutan'=>'nullable|integer',

            'aktif'=>'nullable'

        ]);



        $kalenderAkademik->update([


            'tahun_akademik'=>$data['tahun_akademik'],

            'semester_gasal'=>$data['semester_gasal'],

            'kegiatan'=>$data['kegiatan'],

            'semester_genap'=>$data['semester_genap'] ?? null,

            'urutan'=>$data['urutan'] ?? 0,

            'aktif'=>$request->aktif ? 1 : 0,


        ]);



        return redirect()
            ->route('admin.kalender-akademik.index')
            ->with(
                'success',
                'Agenda kalender berhasil diperbarui'
            );


    }






    public function destroy(
        KalenderAkademik $kalenderAkademik
    ): RedirectResponse
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