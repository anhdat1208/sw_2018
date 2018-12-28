<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ExpertiseController extends Controller
{
    public function index()
    {
        return view('web.expertise.index');
    }
}
