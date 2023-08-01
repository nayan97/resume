<?php

namespace App\Http\Controllers\Admin;

use App\Models\theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $theme =theme::findOrFail(1);
        return view('admin.theme.index',[
            'theme'   => $theme,
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
        //
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
    public function update(Request $request, $id)

    {
        $themes =theme::findOrFail(1);
        $this -> validate($request, [
            'address'      => 'required',
            'cell'         => 'required',
            'email'        => 'required',

          ]);

               // Logo manegement
               if($request -> hasFile('photo')){

                $img =$request -> photo;
                $file_name =time().'.'. $img->getClientOriginalExtension();
         
                $request -> photo -> move('home/aseets/img/', $file_name);
    
            }

            // manage sosial

            $social = [
                'fb'      => $request -> fb ?? '',
                'din'     => $request -> din ?? '',
                'git'     => $request -> git ?? '',
                'mail'    => $request -> mail ?? '',
            ];

            $themes -> update([

            'email'          => $request -> email,
            'address'        => $request -> address,
            'cell'           => $request -> cell,
            'photo'          => $file_name ?? 'photo.JPG',
            'social'         => json_encode($social),
           
         
    
          ]);
          return back() -> with('success', 'Data Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
