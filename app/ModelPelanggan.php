<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPelanggan extends Model
{
    protected $table ='pelanggan';
	use SoftDeletes;
	protected $dates=['deleted_at'];
	

  protected $filable =['nama_pelanggan','alamat','no_pelanggan','nama_produk','harga_produk','pembayaran','total'];
}
