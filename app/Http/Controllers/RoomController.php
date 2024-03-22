<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room::select('id', 'room_code')->get();
        return response()->json($room);
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
    // Validate the incoming request data
    $validatedData = $request->validate([
        'room_code' => 'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif|',
    ]);

    // Initialize an empty filename variable
    $filename = '';

    // Check if the request contains an image file
    if ($request->hasFile('img')) {
        // Retrieve the file from the request
        $file = $request->file('img');

        // Get the file extension
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename using the current timestamp and the file extension
        $filename = time() . '.' . $extension;

        // Store the file in the specified directory with the generated filename
        $path = $file->storeAs('room_image', $filename, 'public');

        // Update the 'img' field in the validated data with the path to the stored image
        $validatedData['img'] = 'storage/' . $path;
    }

    // Create a new room record in the database with the validated data
    $room = Room::create($validatedData);

    // Return a JSON response with the ID, room code, and image path of the newly created room
    return response()->json([
        'id' => $room->id,
        'room_code' => $room->room_code,
        'img' => $room->img
    ], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return response()->json($room);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'room_code' => 'required'
        ]);

        $room->update($validatedData);
        return response()->json($room);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json([ 'message' => "Deleted" ]); 
    }
}
