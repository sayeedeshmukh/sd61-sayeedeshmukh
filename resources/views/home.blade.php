@extends('layouts.app')



@section('content')

    <style>
        .relative {
            position: relative;
        }

        .absolute {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>

    <div class="relative">
    @if (App::getLocale() === 'en')
            <img src="{{ asset('images/eng/portfolio.jpg') }}" alt="Portfolio Image" class="w-full h-auto">
        @elseif (App::getLocale() === 'mr')
            <img src="{{ asset('images/mar/portfolio.jpg') }}" alt="Portfolio" class="w-full h-auto">
        @endif
        
        
    </div>

@endsection
