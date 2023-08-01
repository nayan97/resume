<?php

namespace App\Http\Controllers;

use App\Models\Edu;
use App\Models\Traning;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $skill =Traning::latest()-> get();
        $edus =Edu::latest()-> get();
        return view('home.frontend',[
            'edus'   => $edus,
            'skill'  => $skill
        ]);
    }
   
}
