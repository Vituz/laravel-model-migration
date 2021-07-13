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

    public function show($id)
    {
        $packs = Package::all();

        if (is_numeric($id) && $id < count($packs) && $id >= 0) {
            $pack = $packs[$id];
            return view('packages/show', compact('pack'));
        } else {
            abort(404);
        }
    }
}
