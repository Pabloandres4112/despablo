    @extends('layout.app')
    @section('titulo')
    registro
    @endsection
    @section('contenido')
    <body>
        <div class="m-auto rounded-lg shadow p-7 bg-gradient-to-r from-green-400 via-blue-500 to-teal-500 " style="width:80%; height:40% ">
            <div class="justify-center md:flex md:gap-10 md:items-center">
                <div class="p-5 md:w-6/12">
                    <img src="{{ asset('img/registros.webp') }}" alt="registro"
                    class="shadow-2xl rounded-2xl" style="width: 80%; height: 100%;">
                </div>
                <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
                    <form method="POST">
                        @csrf {{--  //para poder navegar de una pagina a otra  --}}
                        <div class="mb-5">
                            <label for="name" class="block">Nombre</label>
                            <input type="text" name="name" id="name" placeholder="Ingrese su Nombre" class="@error('bg-red-500')@enderror" value="{{ old('name') }}">

                            @error('name')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message}}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="cedula">Cedula</label>
                            <input type="text" name="cedula" id="cedula" placeholder="Ingrese su Cedula"
                            class="@error('bg-red-500')
                            @enderror" value="{{ old('cedula') }}">

                            @error('cedula')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion" class="@error('bg-red-500')

                            @enderror" value="{{ old('direccion') }}">
                            @error('direccion')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="tefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" placeholder="Ingrese su numero " class="@error('bg-red-500')

                            @enderror" value="{{ old('telefono') }}">
                            @error('telefono')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" >Password</label>
                            <input type="password" id="password" name="password" placeholder="password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                            @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-5">
                            <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" >Repetir Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetir password" class="border p-3 w-full rounded-lg">
                        </div>
                        <input type="submit" value="Crear cuenta" class="bg-sky-500 hover:bg-sky-700 transition-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                    </form>
                </div>
            </div>
        </div>
    </body>

    @endsection
