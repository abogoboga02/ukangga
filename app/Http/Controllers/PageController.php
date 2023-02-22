<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function view_admin()
    {
        return view('form.admin');
    }
}
