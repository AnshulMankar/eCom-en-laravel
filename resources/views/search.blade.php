@extends('master')
@section('content')
<div class="custom-product">
 <div class="col-sm-4">
   <a href="#"></a>
 </div>
 <div class="col-sm-4">
  <div class="trending-wrapper">
   <h4>Searched Product</h4>
   @foreach($products as $per)
   <div class="searched-item">
     <a href="detail/{{$per['id']}}"></a>
     <img src="{{$per['gallery']}}" class="trending-image">
     <div class="">
       <h6>{{$per['name']}}</h6><br><br>
        <h8>{{$per['description']}}</h8>
     </div>
   </div>
   @endforeach
 </div>  
</div>
</div>  
@endsection 