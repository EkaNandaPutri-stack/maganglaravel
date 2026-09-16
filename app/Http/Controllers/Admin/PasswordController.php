<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PasswordController extends Controller
{


    public function update(Request $request)
    {


        $request->validate([

            'password_lama' => 'required',

            'password_baru' => 'required|min:8|confirmed'

        ]);



        $user = auth()->user();



        // cek password lama

        if(!Hash::check($request->password_lama, $user->password)){


            return back()->with('error','Password lama salah');


        }



        // update password baru ke database

        $user->password = Hash::make(
            $request->password_baru
        );


        $user->save();



        return redirect()

            ->route('admin.profile')

            ->with('success','Password berhasil diganti');


    }


}