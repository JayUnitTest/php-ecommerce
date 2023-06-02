@extends('master')
@section("content")
<div class="custom-prod">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner active">
         @foreach ($products as $item)
         <div class="carousel-item  {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
               <img class="slider-img" src="{{$item['prodGallery']}}">
               <div class="carousel-caption">
                  <h3>{{$item['prodName']}}</h3>
                  <p>{{$item['prodDescription']}}</p>
               </div>
            </a>
         </div>
         @endforeach
      </div>
      <div class="trending-prod">
         <h3>Trending Products</h3>
         @foreach ($products as $item)
         <div class="trending-product">
            <a href="detail/{{$item['id']}}">
               <img class="trending-img" src="{{$item['prodGallery']}}">
               <h3>{{$item['prodName']}}</h3>
         </div>
         </a
      </div>
      @endforeach
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
</div>
@endsection