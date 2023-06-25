@extends('master')
@section("content")
<div class="custom-prod">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($products as $index => $item)
                <li data-target="#carouselExampleControls" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $index => $item)
                <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="d-block w-100" src="{{$item['prodGallery']}}" alt="{{$item['prodName']}}">
                        <div class="carousel-caption">
                            <h3>{{$item['prodName']}}</h3>
                            <p>{{$item['prodDescription']}}</p>
                        </div>
                    </a>
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
    <div class="trending-prod">
        <h3>Trending Products</h3>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <a href="detail/{{$item['id']}}">
                            <img class="card-img-top" src="{{$item['prodGallery']}}" alt="{{$item['prodName']}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$item['prodName']}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="panel panel-default" style="clear:both">
  <div class="panel-body">
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis, elit vel consequat aliquet, erat elit convallis velit, at dapibus urna felis nec sem.</p>
          </div>
          <div class="col-md-4">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="/">Home</a></li>
              <li><a href="/products">Products</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Contact Us</h4>
            <p>123 Main Street, City, Country</p>
            <p>Email: info@example.com</p>
            <p>Phone: 123-456-7890</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
    </div>
</div>

@endsection