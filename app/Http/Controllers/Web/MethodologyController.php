<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class MethodologyController extends Controller
{
    public function index()
    {
        return view('web.methodology.index');
    }
}
