<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use App\Models\order;
use Illuminate\Support\Facades\DB;



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
    	if ($req->session()->has('user')) 
        {
    		$cart = new cart;
    		$cart->user_id= $req->session()->get('user')['id'];
    		$cart->product_id= $req->product_id;
    		$cart->save();
    		return redirect('/');
    	} 
        else  
            {   		
                return redirect("/login"); 
            }
    }	
    	
   static function carItem()
    {
    	$userId = Session::get('user')['id'];
    	return cart::where('user_id',$userId)->count();
    }
    function cartlist()
    {
    	$userId = Session::get('user')['id'];
    	$data = DB::table('cart')
    	->join('products','cart.product_id','products.id')
    	->select('products.*','cart.id as cart_id')
    	->where('cart.user_id',$userId)
    	->get(); 

    	return view('/cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
    function OrderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId) 
        ->sum('products.price'); 

        return view('ordernow',['total'=>$total]);
    }
   function OrderPlace(Request $req)
   {
    $userId = Session::get('user')['id'];
    
    $allCart=Cart::where('user_id',$userId)->get();
    foreach ($allCart as $cart) {
        $order = new order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->address = $req->address;
        $order->status = "pending";
        $order->payment_method = $req->payment;
        $order->payment_status = "pending";
        $order->save();
        
    }
    Cart::where('user_id',$userId)->delete();
    return redirect('/');
   }
   function myOrder()
   {
       $userid = Session::get('user')['id'];
       $orders = DB::table('orders')
       ->join('products','orders.product_id','products.id')
       ->where('orders.user_id',$userid)
       ->get();

       return view('myorder',['orders'=>$orders]);
   }
}
