@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">

            @if (session('resent'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4"
                role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <header class="font-semibold text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md" style="background-color: #dc8c80">
            <h1 class="sm:text-white text-5xl estilo pb-3" style="color: #D7CECC; text-align: center;">   {{ __('Verificacion de Direccion Email') }} </h1>
                </header>

                <div class="w-full flex flex-wrap text-gray-700 leading-normal text-sm p-6 space-y-4 sm:text-base sm:space-y-6">
                    <p>
                        {{ __('Para realizar ciertas acciones en nuestra pagina tienes que verificar tu Email!') }}
                    </p>

                    <p>
                        {{ __('Por favor haz click en el link para recibir la solicitud de verificacion') }}, <a
                            class="text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer"
                            onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('pulsa aqui para recibir la solicitud') }}</a>.
                    </p>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.send') }}"
                        class="hidden">
                        @csrf
                    </form>
                </div>

            </section>
        </div>
    </div>
</main>
@endsection
