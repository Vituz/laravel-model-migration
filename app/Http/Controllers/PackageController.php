<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    public function index()
    {
        return view('packages/index');
    }
}
