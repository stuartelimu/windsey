@extends('layouts.app')

@section('content')

<p>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExamplee" aria-expanded="false" aria-controls="collapseExamplee">
    FaaS Platform Basic 
  </button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    FaaS Platform Standard
  </button>
</p>
<div class="collapse" id="collapseExamplee">
  <div class="card card-body">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, perferendis eum? Obcaecati minus, inventore, eius nisi aspernatur dicta impedit dolores eos expedita iure nostrum eum rerum praesentium commodi nobis ducimus?
    <form action="{{ action('PlansController@store') }}" method="post" >
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="hidden" value="FaaS Platform Basic" class="form-control" id="exampleInputEmail1" name="fpb" aria-describedby="emailHelp">
        </div>
                
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
  </div>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.

    <form action="{{ action('PlansController@store') }}" method="post" >
        <div class="form-group">
            <input type="hidden" value="FaaS Platform Standard" class="form-control" name="fps" aria-describedby="emailHelp">
        </div>
                
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
  </div>
</div>

@endsection