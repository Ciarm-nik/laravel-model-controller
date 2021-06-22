<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{

    function index() {
        $data = [
          "movies" => Movie::all()
        ];
        return view("welcome", $data);
      }
}
