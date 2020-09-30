@extends('layouts.master')
@section('content')

        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">

                <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
                <a class="navbar-brand text-dark" href="/">ALPHA-HMS</a>
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
                    @if ($user->role === 'Admin' ||$user->role ==='superadmin' )
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

    {{-- <div class="row">
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



                    @if (Route::has('login'))
                    @auth
                    @if ($user->role === 'Admin' ||$user->role ==='superadmin' )
                    <li>
                        <a href="/register" class="nav-link">Register new user</a>
                    </li>

                    @endif
                <li>
                      <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
                    </li>
                     @endif
                @endif

                    <li><a href="#"></a><i class="fa fa-gear" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Settings</li>
                </ul>
            </div>

        </div>
    </div>
 --}}

    <div class="modal fade" id="addpatientmodal" tabindex="-1" aria-labelledby="addpatientmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addpatientmodalLabel">Add Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="{{ route('patients') }}">
                        @csrf

                        <div class="form-group">
                            <x-jet-label value="{{ __('Patient Name') }}" />
                            <x-jet-input class="form-control" type="text" name="patient_name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                                    <div class="form-group">

                            <x-jet-label value="{{ __('Patient Condition') }}" />
                            <x-jet-input class="form-control" type="text" name="patient_condition" :value="old('email')" required />
                        </div>


                                    <div class="form-group" style="display: none">

                            <x-jet-label value="{{ __('Added_by') }}" />
                            <x-jet-input class="form-control" type="text" name="added_by" required value="{{$user->id}}" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
    </div>
  </div>
</div>

 @if($user->role === 'Admin' || $user->role === 'superadmin')
 <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title"> Active Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <tbody>
                                @foreach ($userlist as $user)


                                <tr>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>


                                </tr>
                                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
   <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title"> Patient Records</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Patient Name</th>
                                <th>Condition</th>
                                <th>Added by</th>
                                <th>Date</th>
                                <tbody>

                                    @forelse ($records as $record)
<tr>

                                    <td>{{$record->patient_name}}</td>
                                    <td>{{$record->patient_condition}}</td>
                                    <td>{{$record->created_at}}</td>


                                </tr>
                                    @empty
<tr>
    <td class="text-danger">NO RECORDS FOUND</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
                                    @endforelse


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('script')
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
@endsection
