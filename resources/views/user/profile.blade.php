@extends('layouts.app')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success">
    <p style="text-align:center"> {{Session::get('success')}} </p>
    </div>
    @endif
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">

        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">


                <header class="font-semibold text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md" style="background-color: #dc8c80">
                <h1 class="sm:text-white text-5xl estilo pb-3" style="color: #D7CECC; text-align: center;">   {{ __('Modificar Perfil') }} </h1>
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method("PUT")
                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Nombre de Usuario') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ auth()->user()->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Direccion de E-Mail') }}:
                        </label>
                   

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ auth()->user()->email }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                   
                    <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100  hover:bg-blue-700 sm:py-4"
                        style="margin-top: 20px;
                                background-color: #f3c191;
                                margin-bottom: 20px">
                            Modificar
                        </button>



                    
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
