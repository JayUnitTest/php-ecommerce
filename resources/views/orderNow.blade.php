@extends('master')
@section("content")
<div class="custom-prod">
     <div class="col-sm-10">
     <table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">Amount</th>
      <td>£{{$total}}</td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td>£2.50</td>
    </tr>
    <tr>
      <th scope="row">Total</th>
      <td>£{{$total+2.50}}</td>
    </tr>
  </tbody>
</table>
<div>
<section class="order-form m-4">
  <div class="container pt-4">
      <div class="row">
          <div class="col-12 px-4">
              <h1>Order Details</h1>
              <span>Complete the form below to finish your order.</span>
              <hr class="mt-1" />
              <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Debit/Credit Card</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>PayPal</span> <br><br>
                </div>
                <button type="submit" class="btn btn-successful">Complete Order</button>
              </form>
      </div>
  </div>
</section>
</div>


     </div>
</div>
@endsection 