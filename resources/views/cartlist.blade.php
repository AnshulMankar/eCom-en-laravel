@extends('master')
@section('content')
<div class="container ">
  <h2><center>Cart Product</center></h2> <br><br>
  
   <br><br>
   @foreach($products as $per)
  <div class="row rowline">
    <div class="col-sm">
       <img src="{{$per->gallery}}" class="trending-image">
    </div>
    <div class="col-sm">
      <h6>{{$per->name}}</h6><br><br>
        <h8>{{$per->description}}</h8>
    </div> <br><br>
    <div class="col-sm">
      <a href="/removecart/{{$per->cart_id}}" class="btn btn-warning">Remove from Cart</a>
    </div>
  </div>

   <br><br>
  @endforeach
</div>
@endsection