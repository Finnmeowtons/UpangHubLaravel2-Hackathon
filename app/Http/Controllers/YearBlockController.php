<?php

namespace App\Http\Controllers;

use App\Models\YearBlock;
use Illuminate\Http\Request;

class YearBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yearblocks = YearBlock::select('id', 'course', 'year', 'block')->get();
        return response()->json($yearblocks);
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
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);

        $yearblock = YearBlock::create($validatedData);
        return response()->json([
            'id' => $yearblock->id,
            'course' => $yearblock->name,
            'year' => $yearblock->name,
            'block' => $yearblock->name,
        ], 201);
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
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);
        $yearblock = YearBlock::findOrFail($id);  

        $yearblock->update($validatedData);
        return response()->json($yearblock);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $yearblock = YearBlock::findOrFail($id);  

        $yearblock->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
