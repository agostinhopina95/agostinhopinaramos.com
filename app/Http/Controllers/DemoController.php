<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo($type = null, $id = null)
    {
        return view('demo', compact('type', 'id'));
    }
}
