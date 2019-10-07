@extends('layouts.app')

@section('content')

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">{{$product->title}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">{{$product->description}}</p>
    <a href="#" class="card-link">Edit</a>
    <a href="#" class="card-link">Delete</a>
  </div>
</div>

@endsection