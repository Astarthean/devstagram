@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Crea una nueva Publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"
                action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="titulo">Titulo</label>
                    <input class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('titulo') }}" type="text" name="titulo" id="titulo"
                        placeholder="Titulo de la publicación">
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="titulo">Descripción</label>
                    <textarea class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" name="descripcion"
                        id="descripcion" placeholder="Descripción de la publicación">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}">
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                    type="submit" value="Publicar">
            </form>
        </div>
    </div>
@endsection
