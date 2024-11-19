<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // $series = DB::select('SELECT name FROM series;');

        // $series = Serie::all();
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {

        // DB::insert('INSERT INTO series (name) VALUES (?)', [$nomeSerie]);

        $nomeSerie = $request->input('name');
        $serie = new Serie();
        $serie->name = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
