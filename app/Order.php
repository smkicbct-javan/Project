<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    public function users(){
    	return $this->belongsTo('App\User');
    }

    public function orders_detail(){
    	return $this->hasMany('App\OrderDetail');
    }

    public $timestamps=false;

    public function zaz(){
    $zaz = OrderDetail::where('order_id', $this->id);
    if($zaz!=null)

    	{
    		return $zaz->sum('total');
    	}
    }

    public function sas(){
    $sas = OrderDetail::where('user_id', $this->user_id);
    if($sas!=null)
    	{
    		return $sas->sum('total');
    	}
    }
}
