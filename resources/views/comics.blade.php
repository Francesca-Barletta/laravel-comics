@extends('layout.app')

@section('title', 'comics')

@section('content')

<div class="container">
    <h1 class="text-danger">MARVEL comics</h1>

    @dump($comics)

    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2022/08/Temp-1400x700(266).png" class="d-block object-fit-cover " alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2024/04/how-to-start-reading-modern-marvel-comics.jpg" class="d-block object-fit-cover " alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i0.wp.com/www.nerdpool.it/wp-content/uploads/2020/06/Marvel-Comics-1000-Clayton-Crain-feature.jpg?fit=1400%2C700&ssl=1" class="d-block object-fit-cover " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

@endsection