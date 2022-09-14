    @extends('master')
@section("content")
<div class=" custom-product">
<!-- Carousel wrapper -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($products as $item)
<div class="carousel-item {{$item['id']==11? 'active':''}}">
<a href="detail/{{$item['id']}}">

  <img class="slider-img" src="{{$item['gallery']}}" alt="...">
  <div class="carousel-caption slider-text">
    <h5 class=" ">{{$item['name']}}</h5>
    <p class=" ">{{$item['description']}}</p>
  </div>


</a>
</div>
    @endforeach
  </div>
  <a class=" carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only ">Previous</span>
  </a>
  <a class=" carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only ">Next</span>
  </a>
</div>



<div class="trending-wrapper">
    <h3>Trending Products</h3>

 @foreach($products as $item)
<div class="trending-item">
  <a href="detail/{{$item['id']}}">
  <img class="trending-img " src="{{$item['gallery']}}" alt="...">
  <div class=" ">
    <h5 class=" ">{{$item['name']}}</h5>
  </a>
  </div>
</div>
 @endforeach
</div>
</div>
<!-- Carousel wrapper -->

  
   
</div>
@endsection