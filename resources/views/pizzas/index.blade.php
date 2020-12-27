@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="content center">
        <div class="title center">
            <h2>Pizza List</h2>
        </div>

        @foreach ($pizzas as $pizza)
            <div>
                {{ $pizza->name }} - {{$pizza->type}} - {{ $pizza->base}}
            </div>
        @endforeach
    </div>

</div>
@endsection

