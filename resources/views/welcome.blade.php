@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div>
        <img src="./img/pizza-house.png" alt="Pizza House logo">
        <div class="center title">
            <h1>The North's Best Pizzas</h1>
        </div>
        <div class="center">
            <p class="mssg">{{ session('mssg') }}</p>
            <a href="/pizzas/create">Order a pizza</a>
        </div>
    </div>

</div>
@endsection
