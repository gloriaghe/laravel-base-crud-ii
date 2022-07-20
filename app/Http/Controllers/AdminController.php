<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home() {
        $comics = Comic::paginate(15);

        return view('admin.home', compact('comics'));
    }
}
