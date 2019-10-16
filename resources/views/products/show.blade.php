@extends('layouts.app')

@section('content')

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">{{$product->title}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">{{$product->description}}</p>
    <a href="/products/{{$product->id}}/edit/" class="card-link">Edit</a>
    <form class="form-inline" method="POST" action="{{action('ProductsController@destroy', $product->id)}}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-link">Delete</button>
    </form>
  </div>
</div>

@endsection