@extends('layout')

@section('main')
    <h4>Услуги</h4>

    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th class="align-middle">ID</th>
            <th class="align-middle">Книга</th>
            <th class="align-middle">Автор</th>
        </tr>
        </thead>
        <tbody>
        @foreach($array as $v)
            <tr>
                <td class="align-middle">{{$v['id']}}</td>
                <td class="align-middle">{{$v['book']}}</td>
                <td class="align-middle">{{$v['author']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
