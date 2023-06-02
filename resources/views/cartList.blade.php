@extends('master')
@section("content")
<div class="custom-prod">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->prodGallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->prodName}}</h2>
                      <h5>{{$item->prodDescription}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href= "/removeitem/{{$item->cart_id}}" class="btn btn-warning"> remove from cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 