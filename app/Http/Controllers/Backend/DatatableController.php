<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function view(){
       return view('backend.datatable.view-datatable');

    }
}
