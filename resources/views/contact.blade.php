{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Contact Me</h1>
    <p class="text-lg leading-relaxed">
        I’d love to hear from you! Feel free to reach out using:
    </p>

    <ul class="list-none">
        <li><strong>Email:</strong> <a href="mailto:sayeee21@gmail.com" class="text-rose-500">sayeee21@gmail.com</a></li>
        <li><strong>Phone:</strong> +91 8459215848</li>
        <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/sayee" class="text-blue-500">linkedin.com/in/sayee</a></li>
    </ul>
</div>
@endsection
