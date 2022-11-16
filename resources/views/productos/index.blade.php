<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
        <div class="flex justify-end">
        @if(Auth::check())
            <a  type="button" class="btn btn-primary " name="create" href="{{route('productos.create')}}"><i class="fa-solid fa-plus fa-fw"></i>Crear</a>
        @endif
        </div>
    </x-slot>

    <div class="col-md-10 offset-md-1">
        @if (session()->has('message'))
        <div>
            <div class="alert alert-success d-flex align-items-center" role="alert">
               <i class="fa-solid fa-circle-info fa-fw fa-2x"></i>
              <div>
                {{ session('message') }}
              </div>
            </div>
        </div>
        @endif

        <table class="table table-striped" width="100%">
            <thead>
                <th class="col-6">Nombre</th>
                <th class="col-3">Tipo</th>
                <th class="col-2">Cantidad</th>
                <th class="col-1">Acciones</th>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->tipo}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>
                        @if(Auth::check())
                        <a type="button" class="btn btn-info" name="edit" href="{{route('productos.edit', $producto->id)}}"><i class="fa-regular fa-edit"></i></a>

                        <form action="{{ route('productos.destroy',$producto->id) }}" method="POST" onsubmit="return confirm('¿Desea eliminar el registro?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger " name="delete" ><i class="fa-solid fa-trash"></i></button>
                        </form>
                        
                        @endif
                    </td>
                </tr>
                @empty
                    <p>No hay productos disponibles</p>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
