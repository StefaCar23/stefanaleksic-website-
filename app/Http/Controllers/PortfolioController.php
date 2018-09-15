<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio as Portfolio;

class PortfolioController extends Controller
{
    //
    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }
    
    public function index()
    {
        $data = [];
        $data['portfolio'] = $this->portfolio->all(); 
        
        return view('portfolio/portfolio', $data);
    }
}
