<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use App\Models\User;



class RegistrarController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            $usertype = Auth()->user()->user_type;
            if ($usertype == 'user') {
                return view('user.index');
            } else {
                return redirect(route('admin.index'));
            }
        }
    }
  

    public function logout()
    {
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect(route('login'));
    }
    public function reserve(Request $request)  {
        // Create a new Document instance
        $data = new Document;
    
        // Assign values to the properties
        $data->user_id = auth()->id();
        $data->goodmoral = $request->goodmoral;
        $data->form = $request->form;
        $data->grade = $request->grade;
        $data->ammount = $request->amount; // Retrieve amount from the request
        $data->message = $request->message;
    
        // Save the data to the database
        $data->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('message', 'Request Sent Successfully');
    }
    
    
}
