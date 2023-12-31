@extends('theme.base');

@section('content')
    <div class="container py-5 text-center">
        <h1>Listado de Clientes</h1>
        <a href="{{ route('client.create') }}" class="btn btn-primary">Crear Cliente</a>

        @if (Session::has('mensaje'))

            <div class="alert alert-info my-5">
                {{ Session::get('mensaje') }}
            </div>

        @endif

        <div class="mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Saldo</th>
                        <th>Nombre</th>
                    </tr>
                </thead>

                <tbody>
                @if (!empty($clients))
                    @forelse ($clients as $client)
                        <tr>
                            <td>
                                <form action="{{ route ('client.destroy', $client)}}"method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Esta seguro de elinimar este cliente')">
                                        Eliminar
                                    </button>
                                </form>
                                <a href="{{ route ('client.edit', $client) }}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>{{ $client->due }}</td>
                            <td>{{ $client->name }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    @endforelse
                @else
                    <!-- Código para mostrar si $clients está vacío o no definido -->
                @endif
                </tbody>
            </table>
        </div>
        
            @if ($clients->count())
                {{ $clients->links() }}
            @endif
    </div>
@endsection
