@extends('layout.app')

@section('title', 'comics')

@section('content')

<div class="container">
    <h1 class="text-danger">MARVEL comics</h1>
    <div class="row justify-content-between ">
@foreach($comics as $comic)

        <div class="card" style="width: 18rem;">
             <img  style="width: 100%; height: 300px; object-fit:cover;" src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">{{ $comic['title'] }}</p>
                 <p class="card-text">{{ $comic['series'] }}</p>
@endforeach
                 
             </div>
        </div>
    </div>
</div>

@endsection