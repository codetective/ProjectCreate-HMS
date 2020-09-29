@extends('layouts.app')
<section>

        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">

                <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
                <a class="navbar-brand" href="/">ALPHA-HMS</a>
                <!--<a class="navbar-brand" href="#">
                <img src="..." class="d-inline-block align-top" width="30" height="30" alt="...">My Brand
            </a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    @auth
                    @if ($user_type === 'Admin')
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register new user</a>
                    </li>

                    @endif
                <li class="nav-item">
                      <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
                    </li>
@else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                     @endif
                </ul>
            </div>
                @endif

        </div>

        </nav>
    <div class="container">
  @if ($errors->any())
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
<h5 class="text-center display-5">{{$user_type}} Dashboard</h5>
    </div>
</section> --}}

    <div class="row">
        <div class="col-md-2 part1">
            <div class="top">
                <p class="heart"><i class="fa fa-heartbeat" aria-hidden="true"></i>
                    <h2>Alpha HMS</h2>
                </p>
            </div>
            <div class="topdown">
                <p>
                    <span><img src="" style="height: 60px; width: 60px; border-radius: 50%;" alt=""></span>
                    <h5 class="name" ></h5>
                </p>
            </div>
            <div class="empty">

            </div>
            <div class="mt-3 icons">
                <ul>
                    <li><a href="#"></a><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Dashboard</li>
                    <li><a href="#"></a><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Register A Doctor</li>
                    <li><a href="#"></a><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Register A Patient</li>
                    <li><a href="#"></a><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Patient Appointments</li>
                    <li><a href="#"></a><i class="fa fa-inbox" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Counselling Sessions </li>
                    <li><a href="#"></a><i class="fa fa-question-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;FAQ</li>
                    <li><a href="#"></a><i class="fa fa-gear" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Settings</li>
                </ul>
            </div>

        </div>
    </div>

