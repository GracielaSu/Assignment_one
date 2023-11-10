<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wedding;

class weddingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wedding = wedding::get(); //anout ka wedding ka database name
        //dd($wedding);
        return view('wedding', [
            'weddings' => $wedding
        ]);
    }
    public function weddingstore(Request $request)
    {
        $newItems = new wedding;
        $newItems->name= $request->name;
        // $newItems->image_names = $request->image_names;
        $newItems->price = $request->price;
        $newItems->save();
        return redirect('wedding'); //view ko pyan return pya
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
