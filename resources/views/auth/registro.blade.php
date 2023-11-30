@extends('layout.app')
@section('titulo')
registro
@endsection
@section('contenido')
<body>
    <div>
        <div class="justify-center md:flex md:gap-10 md:items-center">
            <div class="p-5 md:w-6/12">
                <img src="{{ asset('img/registros.webp') }}" alt="registro"
                class="shadow-2xl rounded-2xl" style="width: 80%; height: 100%;">
            </div>
            <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
                <form action="/registro">
                    @csrf {{--  //para poder navegar de una pagina a otra  --}}
                    <div class="mb-5">
                        <label for="name" class="block">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="mb-5">
                        <label for="cedula">Cedula</label>
                        <input type="number" name="cedula" id="cedula" placeholder="Ingrese su Cedula">
                    </div>
                    <div class="mb-5">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direcion" id="direcion" placeholder="Ingrese su Direccion">
                    </div>
                    <div class="mb-5">
                        <label for="tefono">Telefono</label>
                        <input type="numbre" name="numero" id="numero" placeholder="Ingrese su numero">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
