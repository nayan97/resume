<?php

namespace App\Http\Controllers;

use App\Models\Edu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $edus =Edu::latest()-> get();
        return view('home.frontend',[
            'edus'   => $edus
        ]);
    }
   
}
