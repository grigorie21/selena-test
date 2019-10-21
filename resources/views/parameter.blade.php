@extends('layout')

@section('main')
    <h4>Услуги</h4>

    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th class="align-middle">Название параметра</th>
            <th class="align-middle">Значение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($parameters as $k => $v)
            <tr>
                <td class="align-middle">{{$k}}</td>
                <td class="align-middle">{{$v}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
