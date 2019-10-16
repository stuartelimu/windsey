@extends('layouts.app')

@section('content')

<div class="card" style="width: 50rem;">
  <div class="card-body">
    <h4 class="card-title">Create Product</h4>
    <form method="POST" action="{{action('ProductsController@store')}}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp" name="title" placeholder="Enter title">
            <small id="titleHelp" class="form-text text-muted">Descriptive title</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection