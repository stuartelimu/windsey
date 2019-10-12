@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Telephone</span>
    </div>
    <input type="text" class="form-control" placeholder="{{$user->telephone}}" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Address</span>
        </div>
        <input type="text" class="form-control" placeholder="{{$user->address}}" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Card $</span>
    </div>
    <input type="text" placeholder="{{$user->card}}" class="form-control" aria-label="Amount (to the nearest dollar)">
    
    </div>

    {{$pm}}

    <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">{{$pm}}</span>
    </div>
    <textarea class="form-control" aria-label="With textarea">{{$user->bio}}</textarea>
    </div>
  </div>
</div>

@endsection