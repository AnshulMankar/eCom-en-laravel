@extends('master')
@section('content')
<div class="container ">
  <h2><center>Order List Product</center></h2> <br><br>
  
   <br><br>

   @foreach($orders as $per)

  <div class="row rowline">
    <div class="col-sm">
       <img src="{{$per->gallery}}" class="trending-image">
    </div>
    <div class="col-sm">
       <b>Status  :</b><h6>{{$per->payment_status}}</h6><br><br>
      <h6>{{$per->name}}</h6><br><br>
        <h8>{{$per->description}}</h8>
    </div> <br><br>
   
  </div>

   <br><br>
  @endforeach
</div>
@endsection 