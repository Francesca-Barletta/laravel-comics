@extends('layout.app')

@section('title', 'contacts')

@section('content')

<div class="container">
    <h1 class="text-danger">contacts</h1>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">La tua email:</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Scrivici</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <button class="btn btn-primary">Invia</button>
</div>
</div>

@endsection