@extends('layouts.app')

<div class="container">

    @if ($status)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$status}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <section id="register-admin">
        <div class="container mt-5">
<div class="row justify-content-center align-items-center" style="height: 80vh">
    <div class="col-m6-7 m-auto">

        <form method="POST" action="{{ route('registeradmin') }}">
            @csrf
            <h3 class="font-weight-light">Register ADMIN</h3>

            <div class="form-group">
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

                        <div class="form-group">

                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

                        <div class="form-group">

                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                                <x-jet-label value="{{ __('Role') }}" />

                                <select name="role" id="role" class="block mt-4 w-full border border-solid border-gray-300 rounded py-2" required>
                    {{-- <option value="Select role">Select role</option> --}}
                    <option value="Admin" selected>Admin</option>
                    {{-- <option value="User">User</option> --}}
                </select>
            </div>
                        <div class="form-group">

                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 bg-primary">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </div>
    </div>
    </div>

</section>
</div>

