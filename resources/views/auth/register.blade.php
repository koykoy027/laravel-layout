@extends('layouts.guest')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                autocomplete="name">
            @error('name')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="email">
            @error('email')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" />
            @error('password')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation">Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" />

        </div>

        <div class="mb-3 flex justify-end">
            <button class="btn btn-primary" type="submit">
                Sign up
            </button>
        </div>

        <div class="mb-3 flex items-center justify-end">
            <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                href="{{ route('login') }}">
                Already Registered?
            </a>
        </div>
    </form>
@endsection
