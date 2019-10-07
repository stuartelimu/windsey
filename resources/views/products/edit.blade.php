@extends('layouts.app')

@section('content')

<div class="card" style="width: 50rem;">
  <div class="card-body">
    <h4 class="card-title">Edit Product {{$product->title}}</h4>
    <form method="POST" action="{{action('ProductsController@update', $product->id)}}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="text" value="{{$product->title}}" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp" name="title" placeholder="Enter title">
            <small id="titleHelp" class="form-text text-muted">Descriptive title</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" value="{{$product->description}}" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection