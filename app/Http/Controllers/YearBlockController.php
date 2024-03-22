<?php

namespace App\Http\Controllers;

use App\Models\Yearblock;
use Illuminate\Http\Request;

class YearblockController extends Controller
{
    public function index()
    {
        $yearblocks = Yearblock::select('id', 'course', 'year', 'block')->get();
        return response()->json($yearblocks);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);

        $yearblock = Yearblock::create($validatedData);
        return response()->json([
            'id' => $yearblock->id,
            'course' => $yearblock->course,
            'year' => $yearblock->year,
            'block' => $yearblock->block
        ], 201);
    }

    public function show(Yearblock $yearblock)
    {
        return response()->json($yearblock);
    }

    public function update(Request $request, Yearblock $yearblock)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);
    
        // Update the yearBlock with the validated data
        $yearblock->update($validatedData);
    
        // Return a JSON response with the updated yearBlock data
        return response()->json([
            'id' => $yearblock->id,
            'course' => $yearblock->course,
            'year' => $yearblock->year,
            'block' => $yearblock->block
        ]);
    }


    public function destroy(Yearblock $yearblock)
    {
        $yearblock->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
