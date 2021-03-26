@extends('master')
@section('content')

<div class="custom-product" style="margin: 20px;">
	<div class="col-sm-6">
		<table class="table table-striped">

  <tbody>
    <tr>
      <td>Price</td>
      <td>{{$total}}/- &#8377; Only</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>0 Rupees</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>100</td>
    </tr>
     <tr>
      <td>Total Amount</td>
      <td>{{$total+100}}/- &#8377; Only</td>
      
    </tr>
  </tbody>
</table>

<form method="POST" action="orderplace">
	@csrf
	<div class="form-group">
		<textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="">Payment Method</label>
		<p><input type="radio" value="cash" name="Payment"> <span>Online Payment</span></p>
		<p><input type="radio" value="cash" name="Payment"> <span>EMI Payment</span></p>
		<p><input type="radio" value="cash" name="Payment"> <span>Cash On Delivery</span></p>				
	</div>
	<button type="submit" class="btn btn-success">Order Now</button>
</form>

@endsection