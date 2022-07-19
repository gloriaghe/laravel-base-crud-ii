<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }


    public function create()
    {
        return view('admin.comics.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'thumb'         => 'required|url',
            'price'         => 'numeric',
            'series'        => 'required|string|max:255',
            'sale_date'     => 'date',
            'type'          => 'required|string|max:255',
        ]);


        $formData = $request->all();


        $comic = new Comic();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->thumb = $formData['thumb'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];

        $comic->save();

        // opzione 2:
        // $comic = Comic::create($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }


    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'thumb'         => 'required|url',
            'price'         => 'numeric',
            'series'        => 'required|string|max:255',
            'sale_date'     => 'date',
            'type'          => 'required|string|max:255',
        ]);

        $formData = $request->all();
        $comic->update($formData); //(se abbiamo definito $fillable nel model)

        return redirect()->route('comics.show', ['comic' => $comic]);
    }


    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
