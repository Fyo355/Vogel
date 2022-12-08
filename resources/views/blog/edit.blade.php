@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
    <h1 class="sm:text-white text-5xl estilo pb-14" style="color: #f3c191">
            Editar Post
        </h1>
    </div>
</div>

@if ($errors->any())

    <div class="w-4/5 m-auto">
        <ul>   
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>

            @endforeach
        </ul>
    </div>


@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf 
        @method('PUT')


        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl-outline-none">

            <textarea 
                name="description"
                placeholder="Descripcion..."
                id="editor">{{ $post->description }}</textarea>

                 <div class="bg-gray-lighter pt-15">
                 <label class="button-55">

<span class="uppercase bg-transparent text-xs  py-3 px-5 rounded-3xl">
    Selecciona una imagen
</span>



<input 
    type="file"
    name="image"
    class="hidden"
    accept="image/*"
    onchange="loadFile(event)">
    <img
    src="{{ asset('images/'. $post->image_path) }}" 
    style="display:block;
                margin:auto;" 
          id="output" 
          width="150" 
          height="100"/>
    <script>
        var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
         };
    </script>

</label>

            </div>
           

            <button     
                type="submit"
                class="button-17">
                Modificar
            </button>



    </form>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@endsection