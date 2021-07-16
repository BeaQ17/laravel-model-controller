<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{
    public function index(){
        //prendi dati
        $movies = Movie::all();

        //restituisci view 
        //ddd($movies);
        return view('home', compact('movies'));
        
    }
}
