@extends('admin.templates.base')

@section('mainContent')

<h1 id="titleForm">Modifica il Fumetto:</h1>

<form action="{{ route('comics.update', ['comic' => $comic]) }}" method="post">
    @method('PUT')

    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">
        @error('title')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $comic->description }}">
        @error('description')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        @error('thumb')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ $comic->price }}">
        @error('price')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">
        @error('series')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="sale_date">Sale_date</label>
        <input type="text" name="sale_date" id="sale_date"  value="{{ $comic->sale_date }}">
        @error('sale_date')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">
        @error('type')
            <div role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button>Modifica</button>
</form>

    <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Sei sicuro di volerlo cancellare?')" >Delete</button>
    </form>
@endsection
