<?php

namespace App\Http\Controllers;

use App\Models\YearBlock;
use Illuminate\Http\Request;

class YearBlockController extends Controller
{
    public function index()
    {
        $yearBlocks = YearBlock::select('id', 'course', 'year', 'block')->get();
        return response()->json($yearBlocks);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);

        $yearBlock = YearBlock::create($validatedData);
        return response()->json([
            'id' => $yearBlock->id,
            'course' => $yearBlock->course,
            'year' => $yearBlock->year,
            'block' => $yearBlock->block
        ], 201);
    }

    public function show(YearBlock $yearBlock)
    {
        return response()->json($yearBlock);
    }

    public function update(Request $request, YearBlock $yearBlock)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);
    
        // Update the yearBlock with the validated data
        $yearBlock->update($validatedData);
    
        // Return a JSON response with the updated yearBlock data
        return response()->json([
            'id' => $yearBlock->id,
            'course' => $yearBlock->course,
            'year' => $yearBlock->year,
            'block' => $yearBlock->block
        ]);
    }


    public function destroy(YearBlock $yearBlock)
    {
        $yearBlock->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
