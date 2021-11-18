@extends('main')

@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Aluno</th>
                    <th>Livro</th>
                    <th>Data</th>
                    <th>Exibir</th>
                </tr>
            </thead>
            <tbody>

                @foreach($reservas as $r)
                <tr>
                    <th>{{ $r->id }}</th>
                    <th>{{ $r->user_id }}</th>
                    <th>{{ $r->livro_id }}</th>
                    <th>{{ $r->timestamps }}</th>
                    <td> # </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection