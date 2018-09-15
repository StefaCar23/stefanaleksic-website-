<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CV as CV;

class CvController extends Controller
{
    //
    public function index()
    {
        return view('cv/index');
    }
}
