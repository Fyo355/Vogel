@extends('layouts.app')

@section('content')
<style>
.background-image {
    background-image: url("https://pbs.twimg.com/media/EvAhu-PXEAkflLp.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;

    
}



</style>
    <div class="background-image grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl estilo pb-14" style="color: #f3c191">
                    Bienvenido a Vogel:
                   
                </h1>
                <h1 class="sm:text-white text-5xl estilo pb-14" style="color: #f3c191">
                Foro para fanaticos de las aves
                </h1>
                <a 
                    href="/blog"
                    class="button-19">
                    Acceder al foro
                </a>
                @can('is-admin')
        
             <a href="/admin/users" class=" button-15" style="margin-top:8px" > 
                <span>Mantenimiento</span>
             </a>
       
            @endcan
            </div>
        </div>
    </div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200"> 

        <div>
            <img src="/images/mango.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                ¿A que nos dedicamos?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aperiam magni excepturi ab maiores perspiciatis dignissimos corrupti.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa impedit architecto tempora nulla.
            </p>
 <!--
            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl ">
                Ver mas
            </a>
-->
        </div>



    </div>
    <!--

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Soy un experto en...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Diseño
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Proyecto
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Estrategia
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Pajaros
        </span>

    </div>


    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bol py-10">
            Posts recientes
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolore? Quisquam labore quas quis fuga aut odio.
        </p>

    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    AGUILA
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quam, a beatae asperiores facere animi quaerat numquam alias ipsa expedita voluptatem id maiores.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">      
                Averigua mas aqui
                </a>
            </div>



        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2019/12/05/16/54/blackbird-4675637_960_720.jpg" width="700" alt="">
        </div>
    </div>

-->

@endsection

