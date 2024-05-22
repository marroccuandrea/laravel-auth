@extends('layouts.admin')

@section('content')
    <h2>Progetti</h2>
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

    <form class="d-flex" action="{{ route('admin.projects.store') }}" method="POST">
        <input class="form-control me-2" placeholder="Nuovo progetto" name="title">
        @csrf
        <button class="btn btn-success" type="submit">Aggiungi</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Progetti</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
                <tr>
                    <td>
                        <input type="text" value="{{ $item->title }}">
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