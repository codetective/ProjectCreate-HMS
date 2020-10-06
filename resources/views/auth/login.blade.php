<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        {{-- <x-jet-validation-errors class="mb-4" /> --}}

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

<section id="login-page">
    <div class="container">
        <div class="row justify-content-center align-items-center flex-column" style="height: 80vh">
        <h2 class="py-3 text-center">Login</h2>
 <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- <div class="form-group">
                <x-jet-label value="{{ __('name') }}" />
                <x-jet-input class="form-control" type="text" name="name" :value="('name')" required autofocus />
            </div> --}}

            <div class="form-group">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-primary">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4" style="background-color:#007bff">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</div>
</section>


</x-jet-authentication-card>
</x-guest-layout>
