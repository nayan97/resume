<?php

namespace App\Http\Controllers\Admin;

use App\Models\personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class personalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $personal = personal::latest() -> get();
        $type = 'add';
        return view('admin.personal.index', compact('personal', 'type'));
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
            'name'         => 'required',
            'skill'        => 'required',
            'details'      => 'required'

          ]);
          personal::create([
            'name'         => $request -> name,
            'skill'        => $request -> skill,
            'profile'      => $request -> details,
         
    
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
