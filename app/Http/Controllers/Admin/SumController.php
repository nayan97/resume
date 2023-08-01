<?php

namespace App\Http\Controllers\Admin;

use App\Models\summery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       $summ = summery::latest()-> get();
        return view('admin.summery.index',[
                'summ'   => $summ,
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
              summery::create([
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
