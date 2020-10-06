@extends('layouts.master')


@section('title')
Registered Roles
@endsection


@section('content')

  <div class="container">







    
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header"><h3>edit uusers</h3></div>
                  <div class="card-body">
                  <form action="/update-users/{{$users->id}}" method="post">
                           @csrf
                           @method('PUT')
                           <div class="form-group">
                               <label for="">Users Table Edit</label>
                           <input type="text" name="name" value="{{$users->name}}" class="form-control">
                           </div>
                           <div class="form-group">
                               <select name="role" id="" class="form-control">
                                <option value="admin">admin</option>
                                <option value="doctor">doctor</option>
                                <option value="nurse">nurse</option>
                                <option value="superadmin">superadmin</option>

                               </select>
                              
                           </div>
                           <div>
                               <button type="submit" class="btn btn-primary">update</button>
                               <a href="/dashboard" class="btn btn-danger">cancel</a>
                           </div>
                       </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


  
@endsection



@section('script')

@endsection