@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold text-center mb-6">Contact Us</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" id="name" name="name" class="border border-gray-300 p-2 w-full" required>
            @error('name')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" id="email" name="email" class="border border-gray-300 p-2 w-full" required>
            @error('email')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message:</label>
            <textarea id="message" name="message" class="border border-gray-300 p-2 w-full" rows="5" required></textarea>
            @error('message')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Send Message</button>
    </form>
</div>

@endsection
