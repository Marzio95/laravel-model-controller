<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function listMovie()
    {
        $myMovies = Movie::all();
        dd($myMovies);
        return view('moviepage', $myMovies);
    }
}
