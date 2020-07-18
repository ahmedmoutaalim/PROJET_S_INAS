@extends('layouts.app')


@section('accueil')
<!-- <div class="slider"> -->
    <!-- <div class="slider-items">
        <div class="item active">
             <img src="//inastanger.ma/wp-content/uploads/2020/07/unnamed.jpg">
             
        </div>
        <div class="item">
             <img src="http://inastanger.ma/wp-content/uploads/2020/07/fittosize__705_0_6082e3ebdacb229f1031db1d5c13b28c_bild2.png">
        </div>
    </div> -->
    <!-- slider controls -->
      <!-- <div class="left-slide">&lt;</div> -->
      <!-- <div class="right-slide">&gt;</div> -->
    <!-- slider controls -->
<!-- </div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 600px;" src="//inastanger.ma/wp-content/uploads/2020/07/unnamed.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 600px;" src="http://inastanger.ma/wp-content/uploads/2020/07/fittosize__705_0_6082e3ebdacb229f1031db1d5c13b28c_bild2.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection