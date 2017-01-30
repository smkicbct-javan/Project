<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPenjualan extends Model
{
	protected $table = 'produk';
	use SoftDeletes;
	protected $dates=['deleted_at'];



    protected $filable =['nama_produk','spek_produk','harga-produk'];

}
