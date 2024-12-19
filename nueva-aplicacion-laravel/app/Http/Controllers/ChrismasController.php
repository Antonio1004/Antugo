<?php

namespace App\Http\Controllers;

use App\Models\Chrismas;
use Illuminate\Http\Request;

class ChrismasController extends Controller
{
    public function __invoke(){
        $chrismasItems = Chrismas::all();
        return view('navidad',['regalos'=>$chrismasItems]);
    }
}