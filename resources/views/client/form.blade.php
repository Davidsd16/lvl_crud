@extends('theme.base');

@section('content')
    <div class="container py-5 text-center">
        <h1>Crear Cliente</h1>

        <form action="{{ route('client.store') }}" method="post" dir="ltr">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control mx-auto" class="form-control" style="width: 50%;" placeholder="Nombre del cliente">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('name')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="due" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control mx-auto" class="form-control" style="width: 50%;" placeholder="Saldo del cliente" step="0.01">
                <p class="form-text">Escriba el saldo del cliente</p>
                @error('due')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" class="form-control mx-auto" style="width: 50%;" cols="30" rows="4"></textarea>
                <p class="form-text">Escriba aqui su comentario</p>
                @error('comments')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-info">Guardar Cliente</button>
        </form>
    </div>
    
@endsection