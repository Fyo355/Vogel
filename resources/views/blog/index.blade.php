<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 " >
        <h1 class="sm:text-white text-5xl estilo pb-14" style="color: #f3c191">
            Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif




@if (Auth::check() && Auth::user()->hasVerifiedEmail())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="button-19 ">
            Crear un Post
        </a>
    </div>
@elseif (Auth::user())

<div class="pt-15 w-4/5 m-auto">
        <button
          
            class="button-18 ">
            Verifica tu Email para empezar a crear Posts 
</button>
    </div>



@endif

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/'. $post->image_path) }}" alt="">
        </div>

    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
            Por <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Creado en {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <div class="pb-10 ">
        <p class="module line-clamp text-xl text-gray-700 pt-8 pb-10 leading-8 font-light ">

        {!!$post->description!!}

        </p>
        </div>

        <div class="w-4/5 text-left">
        <a href="/blog/{{ $post->slug }}" class="button-16 ">
            Sigue leyendo
        </a>
        </div>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        
            <span class="float-right">
                <a 
                    href="/blog/{{ $post->slug }}/edit"
                    class="text-gray-700  hover:text-gray-900 pb-1 "
                    style="font-family: 'Balsamiq Sans', cursive;
                           font-family: 'Fredoka One', cursive;";>
                    Editar
                </a>
            </span>

            <span class="float-right">
                <form 
                    action="/blog/{{ $post->slug }}"
                    method="POST">
                    @csrf
                    @method('delete')

                    <button
                        class="text-red-500 pr-3"
                        type="submit"
                        onclick="return confirm('¿Estas seguro que quieres eliminar este Post?'); event.preventDefault();"
                        style="font-family: 'Balsamiq Sans', cursive;
                           font-family: 'Fredoka One', cursive;";>
                        Borrar Post
                    </button>
                </form>
            </span>
        @endif


        @can('is-admin')
        <div style="text-align: center; margin-left: 150px;">
        <span>
                <a 
                    href="/blog/{{ $post->slug }}/edit"
                    class="text-gray-700  hover:text-gray-900 pb-1"
 
                    >
                    Editar
                </a>
            </span>

            <span>
                <form 
                    action="/blog/{{ $post->slug }}"
                    method="POST"
                    >
                    @csrf
                    @method('delete')

                    <button
                        class="text-red-500 pr-3"
                        type="submit"
                        onclick="return confirm('¿Estas seguro que quieres eliminar este Post?'); event.preventDefault();"
                        style="margin-top: 16px;
                               margin-left: 10px">
                        Borrar Post
                    </button>
                </form>
            </span>
        </div>
        @endcan









    </div>
</div>
@endforeach


@endsection