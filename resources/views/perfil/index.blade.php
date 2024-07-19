@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('perfil.store') }}" method="POST" class="mt-10 md:mt-0" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Usuario</label>
                    <input class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}" type="text" name="username" id="username"
                        placeholder="Tu Nombre de Usuario">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="imagen">Imagen Perfil</label>
                    <input class="border p-3 w-full rounded-lg" value="" type="file" accept=".jpg, .jpeg, .png"
                        name="imagen" id="imagen">
                </div>

                <input
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                    type="submit" value="Guardar Cambios">
            </form>
        </div>
    </div>
@endsection
