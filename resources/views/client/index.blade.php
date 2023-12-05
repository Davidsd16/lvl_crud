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
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->due }}</td>
                            <td>{{ $client->comments }}</td>
                        </tr>
                        @empty
                    @endforelse
                @else
                    <!-- Código para mostrar si $clients está vacío o no definido -->
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
