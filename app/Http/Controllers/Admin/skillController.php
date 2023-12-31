<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class skillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::latest() -> get();
        return view('admin.courece.skill.index',[
            'skills'    => $skills,
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
            'skill'         => 'required',


          ]);
              Skill::create([
            'name'         => $request -> skill,
    
    
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
    {   $skill = Skill::findOrFail($id);
        $skills = Skill::latest() -> get();
        return view('admin.courece.skill.index',[
            'skills'    => $skills,
            'type'      => 'edit',
            'skill'     => $skill
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
         $skillupdate =Skill::findOrFail($id);
        
        $this -> validate($request, [
            'skill'         => 'required',


          ]);
          $skillupdate -> update([
            'name'         => $request -> skill,
    
    
          ]);
          return back() -> with('success', 'Data Updated  Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = Skill::findOrfail($id);

        $deleteData -> delete();

        return redirect()->back() -> with('success', 'Data Deleted Successfuly');
    }
}
