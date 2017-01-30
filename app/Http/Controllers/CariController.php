<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Cari;
use App\orang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CariController extends Controller
{
   public function cari()
   {
   	return view('produk/search');
   }
   public function getName(Request $request)
   {
   	   $input = input::get('cari');

   	   $name = \App\orang::where('nama_produk', 'like','%' . $input . '%' )->get();
         
   	   return view('produk/result', compact('name'));
   }


}

