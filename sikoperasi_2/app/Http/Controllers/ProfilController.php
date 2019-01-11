<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
	public function tampil(){
    $nama="<strong>Yunita</strong>";
    $umur=20;
    return view ('profil', compact ('nama','umur'));
	}
}
