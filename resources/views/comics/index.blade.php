@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content d-flex justify-content-between align-items-center my-5">
            <h1>Comics List</h1>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Create</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>thumbnail</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale_date</th>
                    <th>type</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td><img src="{{ $comic->thumb }}" alt="" width="80"></td>
                        <td>{{ $comic->price }} $</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic) }}">View</a> - Edit - Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
