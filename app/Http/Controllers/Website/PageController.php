<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;

class PageController extends Controller
{


    public function index()
    {

        return view('auth.login');

    }



}
