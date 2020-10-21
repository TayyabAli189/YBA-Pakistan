<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawController extends Controller
{
    public function view_home()
    {
        return view('frontend.home.home');
    }
}
