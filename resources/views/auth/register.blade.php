@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/crear-cuenta" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                    <input class="border p-3 w-full rounded-lg @error('name') border-red-500
                    @enderror" value="{{ old('name') }}" type="text" name="name" id="name" placeholder="Tu Nombre">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Usuario</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="username" id="username" placeholder="Tu Nombre de usuario">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Email</label>
                    <input class="border p-3 w-full rounded-lg" type="email" name="email" id="email" placeholder="Tu Email">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="password" id="password" placeholder="Tu Contraseña">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Repetir Contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu Contraseña">
                </div>

                <input class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" type="submit" value="Crear Cuenta">

            </form>
        </div>
    </div>
@endsection