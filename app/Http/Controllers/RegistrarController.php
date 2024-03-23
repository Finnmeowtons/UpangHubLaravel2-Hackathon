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
            if ($usertype === 'user') {
                $user = User::findOrFail(auth()->id());
                $receipts = $user->documents()->where('user_id', auth()->id())->get();

                return view('user.index', compact('receipts'));
            } elseif ($usertype === 'admin') {
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
    public function reserve(Request $request)
    {
        // Create a new Document instance
        $data = new Document;

        // Assign values to the properties
        $data->user_id = auth()->id();
        $data->goodmoral = $request->goodmoral;
        $data->form = $request->form;
        $data->grade = $request->grade;
        $data->amount = $request->amount; // Retrieve amount from the request
        $data->message = $request->message;
 // Access the selected value from the dropdown menu


        // Save the data to the database
        $data->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Request Sent Successfully');
    }

    public function receipt()
    {
        $id = auth()->id();
        $receipts = User::whereHas('documents', function ($q) use ($id) {
            $q->where('user_id', $id);
        })->with('documents')->get();
        dd($receipts);
    }
}
