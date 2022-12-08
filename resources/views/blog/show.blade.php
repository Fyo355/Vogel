

@extends('layouts.app')

@section('content')



<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div align="center">
            <img src="{{ asset('images/'. $post->image_path) }}" alt="" width=700>
</div>


<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        Por <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Creado en {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>





    <p class=" text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
    {!!html_entity_decode($post->description)!!}
</p>

</div>




@endsection