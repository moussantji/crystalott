@extends('auth.base')

@section('title', 'Forgot password')

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
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <x-text-input id="email" placeholder="Your Email" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="off" />
                                        <i class="fas fa-user input-icon"></i>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <x-primary-button class="btn mt-4">
                                        {{ __('Email Password Reset Link') }}
                                    </x-primary-button>
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
