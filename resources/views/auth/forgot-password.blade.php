@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

             <header class="font-semibold text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md" style="background-color: #dc8c80">
                 <h1 class="sm:text-white text-5xl estilo pb-3" style="color: #D7CECC; text-align: center;">   {{ __('Reestablecer Contraseña') }} </h1>
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('password.email') }}">
                    @csrf

                   

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Direccion de E-Mail') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    

                    <div class="flex flex-wrap pb-8 sm:pb-10">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100  hover:bg-blue-700 sm:py-4"
                        style="margin-top: 20px;
                                background-color: #f3c191;">
                            {{ __('Reestablecer') }}
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
