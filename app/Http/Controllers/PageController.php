<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function listMovie()
    {
        $myMovies = Movie::all();
        $data = [
            'myMovies' => $myMovies,
        ];
        return view('moviepage', $data);
    }
}
