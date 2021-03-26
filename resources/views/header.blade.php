<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
  $total = ProductController::carItem();
  } 
  else {
  # code...
}

 $total = ProductController::carItem();
?> 
 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
  <a class="navbar-brand" href="/">EBay</a>


  <ul class="navbar-nav active">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/myorder">Orders</a>
    </li>
  
  <form class="d-flex" action="/search">
    <div class="form-group">
        <input class="form-control search-box" name="query" type="text" placeholder="Search" aria-label="Search">
    </div>
        <button action="/search" class="btn btn-outline-danger buttonlx" type="submit">Search</button>
  </form>
</ul>

<div class="btn-block pull-right">
            <a href="/cartlist"><button type="button" class="btn btn-primary">Card({{$total}})</button></a>
</div>
@if(Session::has('user'))
{
<div class="dropdown">
  <div><button class="btn btn-warning">{{Session::get('user')['name']}}</button></div>
  <div class="dropdown-content">
    <a href="/logout"><button class="btn btn-outline-warning">Logout</button></a>
  </div>
</div>
}
@else
{
<li><a href="/login">Login</a></li>
}
@endif
</nav>

 
