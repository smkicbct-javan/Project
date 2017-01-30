<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cari;
use App\Produk;
use App\ModelPelanggan;
use App\Order;
use App\OrderDetail;
use App\User;
use Auth;
use View;
use Cart;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    public function index()
    	{
            $produk = \App\Produk::paginate(5);
            return view('produk/home',['produk' =>$produk]);
        }


    public function produkpelanggan()
        {
            $produk = \App\Produk::paginate(5);
            return view('produkpelanggan/home',['produk' =>$produk]);
        }	


    public function wakwaw()
        {
            $produk = User::all();
            return view ('/produk/list_transaksi',['user' =>$produk]);
        }


    public function data_transaksi($id)
        {
            $produk = \App\User::find($id);
            return view('produk/data_transaksi',['user' =>$produk]);
        }


    public function transaksi_detail($id)
        {
            $produk = \App\Order::find($id);
            return view('produk/transaksi_detail',['detail' =>$produk]);
        }  



    public function index2()
        {
            return view('homes/rumah');
        }


    public function berhasil()
        {
            return view('homes/berhasil');
        }


    public function index3()
        {
            return view('homes/contact');
        }


    public function show($id)
    	{
    		$produk = Produk::find($id);
    		return view ('produk/single', ['produk'=>$produk]);
    	}


    public function update(Request $request, $id)
    	{
            $produk               = Produk::find($id);
            $produk->nama_produk  = $request->nama_produk;
            $produk->spek_produk  = $request->spek_produk;
            $produk->harga_produk = $request->harga_produk;
            $gambar               = $request->file('file_gambar');
            $namaFile             =$gambar->getClientOriginalName();
            $request->file('file_gambar')->move('uploadgambar',$namaFile);
            $produk->file_gambar  = $namaFile;
            $produk->save();

            return redirect('produk');
    	} 


    public function create()
    	{
    		return view ('produk/create');
    	}

    
    public function store(Request $request)
    	{
             $this->validate($request, [
               'nama_produk'        => 'required',
               'spek_produk'        => 'required|min:5',
               'harga_produk'       => 'required',
               'gambar'             => 'required|image',
            ]);

    		$produk = new Produk;
            $produk->nama_produk    = $request->nama_produk;
            $produk->spek_produk    = $request->spek_produk;
            $produk->harga_produk   = $request->harga_produk;
            $gambar                 = $request->file('file_gambar');
            $namaFile               = $gambar->getClientOriginalName();
            $request->file('file_gambar')->move('uploadgambar',$namaFile);
            $produk->file_gambar    = $namaFile;
            $produk->save();

            return redirect('produk');
    	}


    public function transaksi()
        {
            return view ('/produkpelanggan/transaksi');
        }


    public function edit($id)
        {
            $produk = Produk::find($id);
            return view ('produk/edit',['produk'=>$produk]);
        }


     public function editutang($id)
        {
            $produk = ModelPelanggan::find($id);
            return view ('produkpelanggan/editutang',['pelanggan' =>$produk]);
        }


    public function destroy($id) 
        {
            $produk = Produk::find($id);
            $produk->delete();

            return redirect('produk');
        }


    public function checkout(Request $request)
        {
            $order          = new Order();
            $order->user_id = Auth::user()->id;
            $order->save();
        
            $formid       = str_random();
            $cart_content = Cart::content(1);

            foreach ($cart_content as $cart) {
            $transaction  = new OrderDetail(); 
            $product                 = Produk::find($cart->id);
            $transaction->order_id   = $order->id;
            $transaction->produk_id  = $cart->id;
            $transaction->user_id    = $order->user_id;
            $transaction->kuantitas  = $cart->qty;
            $transaction->total      = $cart->price * $cart->qty;
            $transaction->save();
            }

            Cart::destroy();

            return redirect('produkpelanggan');
            
        }


    public  function cart($id)
        {
            $produk      = Produk::find($id);
            $id          = $produk->id;
            $name        = $produk->nama_produk;
            $qty         = 1;
            $price       = $produk->harga_produk;

            $data = array('id'          => $id, 
                          'name'        => $name, 
                          'qty'         => $qty, 
                          'price'       => $price, 
                          'options'     => array('size' => 'large'));
    
            Cart::add($data);

            $cart_content = Cart::content(1);
            return redirect('produkpelanggan\produkcart')->with('cart_content', $cart_content);

        }


    public function deletecart($id)
        {
            Cart::remove($id);

            return redirect('produkpelanggan/produkcart');
        }


    public function list_cart()
        {
             $cart_content = Cart::content(1);
            return View::make('produkpelanggan\produkcart')->with('cart_content', $cart_content);
        }

    
   
}

    

   

        
        


