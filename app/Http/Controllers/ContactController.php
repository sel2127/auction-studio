<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ContactController extends controller
{
    public function contact(){
        return view('/contact');
    }
}
