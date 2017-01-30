<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Cari;
use App\pelanggan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Cari2Controller extends Controller
{
   public function cari2()
   {
   	return view('produkpelanggan/search');
   }
   public function getName2(Request $request)
   {
   	   $input = input::get('cari2');

   	   $name = \App\pelanggan::where('nama_pelanggan', 'like','%' . $input . '%' )->get();
         
   	   return view('produkpelanggan/result', compact('name'));
   }
}

