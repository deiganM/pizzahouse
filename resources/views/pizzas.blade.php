@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="content center">
        <div class="title center">
            <h2>Pizza List</h2>
        </div>

        @foreach ($pizzas as $pizza)
            <div>
                {{$loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                @if($loop->first)
                    <span>first in the loop</span>
                @endif
                @if($loop->last)
                    <span>last in the loop</span>
                @endif
            </div>
        @endforeach
    </div>

</div>
@endsection

