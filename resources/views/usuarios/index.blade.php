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
                    <th>Aluno</th>
                    <th>Email</th>
                    <th>Exibir</th>
                </tr>
            </thead>
            <tbody>

                @foreach($usuarios as $u)
                <tr>
                    <th>{{ $u->name }}</th>
                    <td>{{ $u->email }}</td>
                    <td> # </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection