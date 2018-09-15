<?php

namespace App\Http\Controllers;
use App\Hobies as Hobies;

use Illuminate\Http\Request;

class HobiesController extends Controller
{
    //
    public function hobiesIndex()
    {
        return view('/hobies/hobiesindex');
    }
}
