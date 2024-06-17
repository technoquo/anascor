<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriaController extends Controller
{
    public function index()
    {

        $gallerias = Gallery::paginate(50);

        return view('menus.gallery', compact('gallerias'));
    }
}
