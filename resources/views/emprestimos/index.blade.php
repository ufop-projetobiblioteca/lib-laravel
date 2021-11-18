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
                    <th>Código</th>
                    <th>Data</th>
                    <th>Exibir</th>
                </tr>
            </thead>
            <tbody>

                @foreach($emprestimos as $e)
                <tr>
                    <th>{{ $e->id }}</th>
                    <th>{{ $e->user_id }}</th>
                    <th>{{ $e->livro->titulo }}</th>
                    <th>{{ $e->livro->codigo }}</th>
                    <th>{{ $e->updated_at }}</th>
                    <td> # </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection