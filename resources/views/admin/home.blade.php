@extends('admin.templates.base')

@section('mainContent')
<h1 id="titleForm">Fumetti</h1>
<button class="link_admin"><a href="{{ route('comics.create')}}">INSERISCI UN NUOVO FUMETTO</a></button>
<section id="tableAdmin">

    <div class="riga" id="title">
        <span>Id</span>
        <span>title</span>
        <span class="description">description</span>
        <span>thumb</span>
        <span>price</span>
        <span>series</span>
        <span>sale_date</span>
        <span>type</span>
        <span >Visualizza</span>
        <span>Modifica</span>
        <span>Cancella</span>
    </div>


    @foreach ($comics as $comic)
        <div class="riga">
            <span>{{ $comic->id }}</span>
            <span>{{ $comic->title }}</span>
            <span class="description">{{ $comic->description }}</span>
            <span>{{ $comic->thumb }}</span>
            <span>{{ $comic->price }}</span>
            <span>{{ $comic->series }}</span>
            <span>{{ $comic->sale_date }}</span>
            <span>{{ $comic->sale_dtypeate }}</span>

            <span>
                <button class="bt">
                    <a class="linkModify" href="{{ route('comics.show', ['comic' => $comic]) }}">VISUALIZZA</a>
                </button>

            </span>
            <span>
                <button class="bt">
                    <a class="linkModify" href="{{ route('comics.edit', ['comic' => $comic]) }}">MODIFICA</a>
                </button>
            </span>
            <span>
                <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bt" type="submit"  onclick="return confirm('Sei sicuro di volerlo cancellare?')">CANCELLA</button>
                </form>
            </span>
        </div>
    @endforeach

</section>

@endsection
