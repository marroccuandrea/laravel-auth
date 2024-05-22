@extends('layouts.admin')

@section('content')
    <h2>Tecnologie</h2>
    <form class="d-flex" action="{{ route('admin.tecnologies.store') }}" method="POST">
        <input class="form-control me-2" placeholder="Nuovo linguaggio" name="title">
        @csrf
        <button class="btn btn-success" type="submit">Aggiungi</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Linguaggi</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnologies as $item)
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