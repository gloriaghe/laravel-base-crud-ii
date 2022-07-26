@extends('admin.templates.base')

@section('mainContent')
    <h1 id="titleForm">Insert New Comic:</h1>
    <button class="link_admin"><a href="{{ route('admin.home')}}">Torna alla tabella dei fumetti</a></button>


    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error('title')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            @error('description')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb">
            @error('thumb')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price">
            @error('price')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
            @error('series')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="sale_date">Sale_date</label>
            <input type="text" name="sale_date" id="sale_date">
            @error('sale_date')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
            @error('type')
                <div role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button>Save</button>
    </form>
@endsection
