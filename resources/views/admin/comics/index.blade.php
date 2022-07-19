


@extends('admin.templates.base')


@section('mainContent')


<div id="app">

    <section id="card">
        <div id="containerCard">
            <div id="title">CURRENT SERIES</div>
            @foreach ($comics as $comicItem)
            <a href="/comics/{{$comicItem->id}}">
                <img src="{{$comicItem->thumb}}" alt="{{$comicItem->series}}">
                <span>{{$comicItem->series}}</span>
            </a>

          @endforeach
        </div>
        <button>
            <a href="#">LOAD MORE</a>
        </button>
    </section>
</div>





@endsection
