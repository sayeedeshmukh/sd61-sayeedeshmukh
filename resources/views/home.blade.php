@extends('layouts.app')

@section('title', 'Home')

@section('content')

<header class="flex flex-col sm:flex-row">
            <div class="px-5 lg:px-2 sm:w-3/4">
                <div class="mx-auto mb-4 max-w-prose border-b border-rose-300/70 pb-4 pt-4 text-lg sm:pt-10">
                <img src="images/home.jpg" class="object-cover object-center border-4 border-rose-300 mr-6 rounded-xl" />
</div>
<h1 class="text-4xl mt-5 text-center"><strong>Hello!</strong></h1>
<div class="flex flex-col px-5 lg-">
    <h2 class="text-4xl mt-5 text-center"><strong>welcome to my portfolio</strong></h2>
<p class="mt-5 ">
    I am <strong>Sayee Deshmukh</strong>. I like to think that I bring a lively energy to my work and personal endeavors. I have a natural curiosity, always eager to learn and explore new ideas. My creativity shines through in my projects, and you're detailed and organized in your approach. You enjoy working with a sense of purpose, staying focused on my goals while also valuing fun and balance in everything I do.
</p>
</div>
@endsection
