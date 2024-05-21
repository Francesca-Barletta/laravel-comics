@extends('layout.app')

@section('title', 'About-Us')

@section('content')

<div class="container">
    <h1>Chi siamo</h1>

    <div class="row justify-content-between ">
        <div class="card" style="width: 18rem;">
            <img style="width: 100%; height: 300px; object-fit:cover;" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fHww" class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img  style="width: 100%; height: 300px; object-fit:cover;" src="https://static.generated.photos/vue-static/face-generator/landing/demo-previews/skin-tone.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img style="width: 100%; height: 300px; object-fit:cover;" src="https://img.freepik.com/free-photo/thoughtful-young-man-looking-side-isolated-pink-wall_141793-73168.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img style="width: 100%; height: 300px; object-fit:cover;" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top " alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    </div>
 </div>



@endsection