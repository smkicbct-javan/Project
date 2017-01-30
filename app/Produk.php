<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
	protected $table ='produk';
	use SoftDeletes;
	protected $dates=['deleted_at'];
	

  protected $filable =['nama_produk','spek_produk','harga_produk','file_gambar'];

  public function order_detail()
    {
    	return $this->belongsTo('App\OrderDetail');
    }

}
