@extends('layouts.app')

@section('content')

<section id="bacground">
    <div>
        <div id="central" >
            <h1>Alpha Hospital <br> Management System</h1>
        </div>

    </div>
    <div>
       <div class="row"id="centra">
        <div class="card" style="width: 15rem;">
            <div class="card-body">
                <span id="icon"><i class="fa fa-github" aria-hidden="true"></i></i></span>
                <a href="#" class="btn btn-primary">Login as an Admin</a>
            </div>
          </div>
          <div class="card" style="width: 15rem;">
            <div class="card-body">
                <span id="icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></i></span>
              <a href="#" class="btn btn-primary">Login as an Employee</a>
            </div>
          </div>
       </div>
    </div>
</section>

@endsection
