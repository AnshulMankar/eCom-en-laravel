@extends('master')
@section('content')
<div class="container ">
  <div class="row">
    <div class="col-sm-6" pxl>
      <img class="detail-img" src="{{$product['gallery']}}">
    </div>
    <div class="col-sm-6 card">
      <button type="button" class="btn btn-light"><a href="/"> < Go Back</a></button>
      <div class="container">
      <h5>{{$product['name']}}</h5>
      <h6>Price : {{$product['price']}}</h6>
      <h8><i>Details : </i>{{$product['description']}}</h8><br>
      <h8><i>Category : </i>{{$product['category']}}</h8>
      <br><br>
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Add Cart</button>
      </form>
      <br><br>
      <button class="btn btn-success">Buy Now</button>
      </div>
    </div>
  </div>
</div>
@endsection 