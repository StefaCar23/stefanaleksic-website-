<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact as Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact/index');
    }
}
