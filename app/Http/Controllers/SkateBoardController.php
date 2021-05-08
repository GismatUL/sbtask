<?php

namespace App\Http\Controllers;

use App\Models\SkateBoard;
use Illuminate\Http\Request;

class SkateBoardController extends Controller
{
    public function skateboard()
    {
        $skateboards = SkateBoard::paginate(15);

        return view('skateboards')->with(compact('skateboards'));
    }
}
