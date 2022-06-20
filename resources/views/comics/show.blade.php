@extends('layouts.app')

@section('content')
    <div class="container text-center" id="show_content">
        <h1 class="my-5">{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="" class="img-fluid" style="max-width:200px">
        <div class="comic_info my-3">
            <h3>{{ $comic->price }}</h3>
            <h5>{{ $comic->series }}</h5>
            <h6>{{ $comic->type }}</h6>
            <p>{{ $comic->sale_date }}</p>
            <p>{{ $comic->description }}</p>
        </div>
    </div>
@endsection
