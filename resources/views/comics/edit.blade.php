@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')
            {{-- Title input --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="" value="{{ $comic->title }}">
                <small id="titleHelper" class="form-text text-muted">Edit title</small>
            </div>
            {{-- Thumb input --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="" value="{{ $comic->thumb }}">
                <small id="thumbHelper" class="form-text text-muted">Edit thumbnail</small>
            </div>
            {{-- Price input --}}
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="" value="{{ $comic->price }}">
                <small id="priceHelper" class="form-text text-muted">Edit price</small>
            </div>
            {{-- Series input --}}
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="" value="{{ $comic->series }}">
                <small id="seriesHelper" class="form-text text-muted">Edit serie</small>
            </div>
            {{-- Sale input --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="saleDateHelper"
                    placeholder="" value="{{ $comic->sale_date }}">
                <small id="saleDateHelper" class="form-text text-muted">Edit sale date</small>
            </div>
            {{-- Type input --}}
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="" value="{{ $comic->type }}">
                <small id="typeHelper" class="form-text text-muted">Edit type</small>
            </div>
            {{-- Description input --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}</textarea>
            </div>
            {{-- Submit button --}}
            <button type="submit" class="btn btn-primary">Edit Comic</button>
        </form>
    </div>
@endsection
