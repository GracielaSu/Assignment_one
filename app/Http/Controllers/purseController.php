<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purse_model;

class purseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purse = purse_model::get(); //anout ka purse ka database table name
        //dd($purse);
        return view('purse', [
            'purses' => $purse
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
