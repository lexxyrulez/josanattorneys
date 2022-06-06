<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Portfoliocontroller;

class Portfoliocontroller extends Controller
{
   
   public function portfolio()
    {
        return view('portfolio');
    }
}
