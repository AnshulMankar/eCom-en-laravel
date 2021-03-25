@extends('master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide trip" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    @foreach($products as $per)
    <div class="carousel-item {{$per['id']==1?'active':''}}">
     <a href="detail/{{$per['id']}}">
        <img src="{{$per['gallery']}}" class="slider-img w-100">
      <div class="carousel-caption slider-text">
        <h3>{{$per['name']}}</h3>
        <p>{{$per['description']}}</p>
      </div>
     </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
<div class="trending-wrapper">
  <h3>Trending Product</h3>
  @foreach($products as $per)
  <div class="trending-item">
  <a href="detail/{{$per['id']}}">
  <img src="{{$per['gallery']}}" class="trending-image" >
  <div class="">
    <h6>{{$per['name']}}</h6>
  </div>  
</a>
  </div>

  @endforeach
  </div>
@endsection 