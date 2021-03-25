<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;


class ProductController extends Controller
{
    function index()
    {
    	$data = product::all();
    	return view('product',['products'=>$data]);
    }
    function details($id)
    {
    	$data = product::find($id);
    	return view('details',['product'=>$data]);
    }
    function search(Request $req)
    {
		$data = product::where('name','LIKE','%'.$req->input('query').'%')->get();  
		  	return view('search',['products'=>$data]);
    }
    function addToCart(Request $req){
    	if ($req->session()->has('user')) {
    		$cart = new cart;
    		$cart->user_id= $req->session()->get('user')['id'];
    		$cart->product_id= $req->product_id;
    		$cart->save();
    		return redirect('/');
    	} else {
    		return redirect("/login");
    	}
    	
    }
   static function carItem()
    {
    	$userId = Session::get('user')['id'];
    	return cart::where('user_id',$userId)->count();
    }
}
