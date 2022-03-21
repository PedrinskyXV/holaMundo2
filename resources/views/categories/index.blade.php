@extends('layouts.app')

@section('content')
<h1>Categorias</h1>
<h2 class="text-center mb-5">Administracion de categorias</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                {{-- <th scope="col">Descripcion</th> --}}
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection

