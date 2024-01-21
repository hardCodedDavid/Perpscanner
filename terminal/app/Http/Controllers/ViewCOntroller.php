<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCOntroller extends Controller
{
    public function alert() {
        return view('alert');
    }

    public function screener() {
        return view('index');
    }

    public function overview() {
        return view('overview');
    }

}
