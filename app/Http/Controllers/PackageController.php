<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    public function index()
    {
        $packs = Package::all();

        return view('packages/index', compact('packs'));
    }
}
