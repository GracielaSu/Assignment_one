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
    public function get_wedding(){
        $wedding = wedding::get();
        return response()->json([
            'wedding'   =>  $wedding
        ]);
    }

    public function create_wedding(Request $request)
    {
        $newItems = new wedding;
        $newItems->name= $request->name;
        // $newItems->image_names = $request->image_names;
        $newItems->price = $request->price;
        $newItems->save();
        return response()->json([
            'new_item'   =>  $newItems
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

    public function update_wedding(Request $request)
    {
        $wedding =wedding::find($request->id);
        $wedding->update([
            
            "name"=> $request->name,
            "price"=> $request->price
        ]);
        $wedding =wedding::find($request->id);
        return response()->json([
            "updated_value"=> $wedding 
            // "updated_name=> $wedding->name
            // "updated_price=> $wedding->price
        ]);
    }


    public function delete_wedding(Request $request)
    {
        wedding::find($request->id)->delete();
        $wedding = wedding::get(); 
        return response()->json([
            "updated_value"=> $wedding 
            // "updated_name=> $wedding->name
            // "updated_price=> $wedding->price
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
    public function edit($id)
    {
        // dd($id);
        $wedding = wedding::find($id);
        // dd ( $car );
        return view("edit", compact("wedding"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wedding =wedding::find($id);
        $wedding->update([
            "name"=> $request->name,
            "price"=> $request->price
        ]);
        return redirect("/wedding")->with("success","Update success!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        wedding::find($id)->delete();
        return redirect("/wedding")->with("success","Successfully deleted");
    }

}
