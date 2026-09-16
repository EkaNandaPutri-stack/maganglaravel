<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfileController extends Controller
{


public function updateFoto(Request $request)
{


$request->validate([

'foto'=>'required|image|mimes:jpg,jpeg,png|max:2048'

]);



$user = auth()->user();



if($request->hasFile('foto')){


$path = $request->file('foto')
->store('profile','public');


$user->foto = $path;


$user->save();


}



return back()
->with('success','Foto profil berhasil diganti');


}


}