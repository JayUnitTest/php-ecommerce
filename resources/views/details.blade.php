@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img"src="{{$product['prodGallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Previous Page</a>
            <h2>{{$product['prodName']}}</h2>
            <h4>Category : {{$product['prodCategory']}}</h4>
            <h3>Price : £{{$product['prodPrice']}}</h3>
            <h4>Product Information : {{$product['prodDescription']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}} >
            <button class="btn btn-prime">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-buy">Buy Now</button>
        </div>
    </div>

</div>
@endsection