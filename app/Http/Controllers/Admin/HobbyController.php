<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hobby;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hobby = Hobby::latest()-> get();
        return view('admin.hobbe.index',[
                'hobby'   => $hobby,
                'type'   => 'add'
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
            'name'         => 'required',

          ]);
              Hobby::create([
            'name'         => $request -> name
         
    
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
