@extends('main')
@section('content')
    @if(session('successMsg'))
        <div class="alert alert-success" role="alert" style="text-align: center">
            {{session('successMsg')}}
        </div>
    @endif
<div class="container mt-3">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Position</th>
            <th scope="col">Number</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
            <tr>
                <th scope="row">{{$player->name}}</th>
                <td>{{$player->surname}}</td>
                <td>{{$player->position}}</td>
                <td>{{$player->number}}</td>
                <td>Edit or Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    </div>


@endsection
