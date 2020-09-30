@extends('layouts.app')

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
    <section id="register-user">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center" style="height: 80vh">
                <div class="col-m6-7 m-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="font-weight-light">Register User</h3>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Name') }}" />
                            <x-jet-input class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                                    <div class="form-group">

                            <x-jet-label value="{{ __('Email') }}" />
                            <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>
                         <div class="form-group">
                            <x-jet-label value="{{ __('Role') }}" />

                            <select name="role" id="role" class="form-control border" required>
                                <option value="Select role">Select role</option>
                                <option value="Admin">Admin</option>
                                <option value="User">Doctor</option>
                                <option value="User">Patient</option>
                            </select>
                        </div>

                                    <div class="form-group">

                            <x-jet-label value="{{ __('Password') }}" />
                            <x-jet-input class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>
                          <div class="form-group">

                            <x-jet-label value="{{ __('Confirm Password') }}" />
                            <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>




                        <div class="flex items-center justify-end mt-4">

                            <x-jet-button class="d-block ml-auto bg-primary">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
             </div>
        </div>

    </section>
</div>

