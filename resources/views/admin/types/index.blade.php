@extends('layouts.admin')

@section('content')
    <h2>Tipo</h2>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <form class="d-flex" action="{{ route('admin.types.store') }}" method="POST">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Nuovo tipo" name="title">
            <button class="btn btn-success" type="submit">Aggiungi</button>
        </form>
        <thead>
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $project)
                <tr>
                    <td>
                        <form action="{{ route('admin.types.update', $project) }}" method="POST"
                            id="form-edit-{{ $project->id }}">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{ $project->title }}">

                        </form>
                    </td>
                    <td>
                        <button class="btn btn-warning ">Modifica</button>
                        <button class="btn btn-danger">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
