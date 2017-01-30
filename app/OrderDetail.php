<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
     protected $table='orders_detail';


    public function getname(){
      $produx = Produk::where('id', $this->produk_id)->first();
      if($produx!=null)
    	{
    		return $produx->nama_produk;
    	}
    }

    public function getharga(){
      $produs = Produk::where('id', $this->produk_id)->first();
      if($produs!=null)
      {
        return $produs->harga_produk;
      }
    }


    public function produk(){
    	return $this->hasMany('App\Produk');
    }

 	public function orders(){
 		return $this->hasMany('App\Order');
 	}
}
