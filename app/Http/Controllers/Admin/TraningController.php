<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Models\Traning;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {   $traning =Traning::latest()-> get();
        $skill =Skill::all();

        return view('admin.courece.index',[
            'traning'    => $traning,
            'skill'      => $skill,
            'type'       => 'add'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $this -> validate($request, [
            'ins'            => 'required',
            'title'          => 'required',
            'startdate'      => 'required',
            'enddate'        => 'required'

          ]);
          Traning::create([
            'name'         => $request -> ins,
            'title'        => $request -> title,
            'date'         => $request -> startdate,
            'dates'        => $request -> enddate,
            'skills'       => json_encode($request -> skill)
         
    
          ]);
          return back() -> with('success', 'Data Added  Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
