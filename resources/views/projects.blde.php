{{-- resources/views/projects.blade.php --}}
@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">My Projects</h1>
    <p class="text-lg leading-relaxed">
        Below are some of the projects I have worked on:
    </p>

    <ul class="list-disc list-inside">
        
        <li><strong>Portfolio Website</strong> - This static site built with Laravel, Blade, and TailwindCSS.</li>
        <li><strong>Machine Learning Model</strong> - A predictive model for classifying images using CNN.</li>
    </ul>
</div>
@endsection
