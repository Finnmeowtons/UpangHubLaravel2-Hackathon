<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
