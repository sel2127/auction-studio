<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;
class ExploreController extends Controller
{
    public function explore() {
        $images = Image::all();
        return view('explore', compact('images'));
    }
    
   
}
