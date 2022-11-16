<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Crear Producto
        </h2>
    </x-slot>

    @if (session()->has('message'))
    <div>
        {{ session('message') }}
    </div>
    @endif

    <div class="col-md-10 offset-md-1">
        <form class="" method="POST" action="{{ route('productos.index') }}">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                @error('nombre')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Tipo</label>
                <input type="text"  class="form-control" name="tipo" value="{{old('tipo')}}">
                @error('tipo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Cantidad</label>
                <input type="number"  class="form-control" name="cantidad" value="{{old('cantidad')}}">
                @error('cantidad')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button  class="btn btn-primary" type="submit">
                   <i class="fa-solid fa-save fa-fw"></i>Guardar
                </button>
            </div>
        </form>
    </div>

</x-app-layout>