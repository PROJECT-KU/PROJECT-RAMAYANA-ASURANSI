<?php

namespace App\Http\Controllers\usermanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    //
    public function index()
    {
        return view('usermanagement/index');
    }
}
