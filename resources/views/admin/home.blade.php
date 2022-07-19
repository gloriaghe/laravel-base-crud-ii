@extends('admin.templates.base')

@section('mainContent')
<h1 id="titleForm">Fumetti</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>

            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->thumb }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->sale_dtypeate }}</td>

                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic]) }}">Visualizza</a>
                </td>
                <td>
                    <a href="{{ route('comics.edit', ['comic' => $comic]) }}">Modifica</a>
                </td>
                <td>
                    <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Cancella</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
