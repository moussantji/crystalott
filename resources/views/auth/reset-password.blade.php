@extends('auth.base')

@section('title', 'Reset password')

@section('content')


    <section class="main2-area">
        <div class="logo">
            <a href="{{ route('welcome') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
        </div>
        <div class="main-left" id="particles-js">
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">
                    <div class="card-front">
                        <div class="center-wrap">
                            <div class="section-login text-center">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="form-group">
                                        <x-text-input id="email" placeholder="Your Email" type="email" name="email"
                                            :value="old('email', $request->email)" required autofocus autocomplete="off" />
                                        <i class="fas fa-user input-icon"></i>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-group mt-2">
                                        <x-text-input id="password" class="form-style" type="password" name="password"
                                            placeholder="Your Password" required autocomplete="off" />
                                        <i class="fas fa-lock input-icon"></i>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-group mt-2">
                                        <x-text-input id="password_confirmation" class="form-style" type="password"
                                            name="password_confirmation" placeholder="Confirm Password" required
                                            autocomplete="new-password" />
                                        <i class="fas fa-lock input-icon"></i>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <x-primary-button class="btn mt-4">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                    <div class="forgot mb-0 mt-4 text-center">
                                        @if (Route::has('password.request'))
                                            <a class="link" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main2-right" style="background-image: url('{{ asset('assets/img/women.jpg') }}');"></div>

    </section>


@endsection
