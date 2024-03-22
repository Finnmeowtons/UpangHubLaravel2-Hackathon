<?php

namespace App\Http\Controllers;

use App\Models\Subjectteacher;
use Illuminate\Http\Request;

class SubjectteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjectteachers = Subjectteacher::select('id', 'subject_code', 'subject_name', 'teacher')->get();
        return response()->json($subjectteachers);
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
            'subject_code' => 'required',
            'subject_name' => 'required',
            'teacher' => 'required'
        ]);

        $$subjectteacher = Subjectteacher::create($validatedData);
        return response()->json([
            'id' => $subjectteacher->id,
            'subject_code' => $subjectteacher->subject_code,
            'subject_name' => $subjectteacher->subject_name,
            'teacher' => $subjectteacher->teacher
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjectteacher = Subjectteacher::findOrFail($id);

        return response()->json($subjectteacher);
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
            'subject_code' => 'required',
            'subject_name' => 'required',
            'teacher' => 'required'
        ]);
        $subjectteacher = Subjectteacher::findOrFail($id);  

        $subjectteacher->update($validatedData);
        return response()->json($subjectteacher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subjectteacher = Subjectteacher::findOrFail($id);  

        $subjectteacher->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
