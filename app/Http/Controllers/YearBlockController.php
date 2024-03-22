<?php

namespace App\Http\Controllers;

use App\Models\YearBlock;
use Illuminate\Http\Request;

class YearBlockController extends Controller
{
    public function index()
    {
        $yearBlock = YearBlock::select('id', 'course', 'year', 'block')->get();
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
        $validatedData = $request->validate([
            'course' => 'required',
            'year' => 'required',
            'block' => 'required',
        ]);

        $yearBlock->update($validatedData);
        return response()->json($yearBlock);
    }

    public function destroy(YearBlock $yearBlock)
    {
        $yearBlock->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
