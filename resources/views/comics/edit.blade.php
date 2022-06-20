@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit {{ $comic->title }}</h1>
        {{-- Pop-up per la visualizzazione di errori --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Form per editare un record nel database --}}
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')
            {{-- Title input --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="" value="{{ $comic->title }}" class="@error('title') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('title')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="titleHelper" class="form-text text-muted">Edit title</small>
            </div>
            {{-- Thumb input --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="" value="{{ $comic->thumb }}" class="@error('thumb') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('thumb')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="thumbHelper" class="form-text text-muted">Edit thumbnail</small>
            </div>
            {{-- Price input --}}
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="" value="{{ $comic->price }}" class="@error('price') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('price')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
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
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="saleDateHelper"
                    placeholder="" value="{{ $comic->sale_date }}" class="@error('sale_date') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('sale_date')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
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
