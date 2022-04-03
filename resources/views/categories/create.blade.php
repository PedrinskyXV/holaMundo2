@extends('layouts.app')


@section('buttons')
    <a class="btn btn-primary mr-2" href="{{ route('categories.index') }}">Regresar</a>
@endsection


@section('content')

<div class="text-center mb-5">
    <h1>Crear</h1>
    <h2>Categoria</h2>
</div>

<div class="col-md-10 mx-auto bg-white p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('categories.store') }}" method="post" novalidate>
                @csrf
                <h2 class="mb-3 text-uppercase">Informacion de la categoria:</h2>
                <div class="row mb-3">
                    <label for="name">Nombre de la Categoria</label>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre de la categoria" value="{{ old('name')}}">
                    </div>

                    @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>    
                        </span>
                    @enderror

                    <div class="form-group">
                        <input type="submit" value="Agregar Categoria" class="btn btn-outline-primary">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

