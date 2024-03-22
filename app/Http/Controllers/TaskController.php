<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Yearblock; 
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::select('id', 'text', 'yearblock_id')->with('yearblock')->get();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required',
            'yearblock_id' => 'required'
        ]);

        $task = Task::create($validatedData);
        return response()->json([
            'id' => $task->id,
            'text' => $task->text,
            'yearblock_id' => $task->yearblock_id
        ], 201);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'text' => 'required',
            'yearblock_id' => 'required'
        ]);

        $task->update($validatedData);
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
