<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pending = Document::where('status', 'pending')->get();

        $acceptedCount = Document::where('status', 'accepted')->count();
        $rejectCount = Document::where('status', 'rejected')->count();
        $doneCount = Document::where('status', 'done')->count();


        return view('admin.index', [
            'pendings' => $pending,
            'acceptedCount' => $acceptedCount,
            'rejectCount' =>  $rejectCount,
            'doneCount' => $doneCount

        ]);
    }
    public function accept(Document $id)
    {

        $id->update([
            'status' => 'accepted'
        ]);
        return redirect()->back();
    }
    public function reject(Document $id)
    {

        $id->update([
            'status' => 'rejected'
        ]);
        return redirect()->back();
    }

    public function done(Document $id)
    {
        $id->update([
            'status' => 'done'
        ]);

        return redirect()->back();
    }

    public function successView()
    {
        $rejects = Document::where('status', 'done')->get();
        return view('admin.success', ['rejects' => $rejects]);
    }
    public function acceptView()
    {

        $accepts = Document::where('status', 'accepted')->get();

        return view('admin.accept', ['accepts' => $accepts]);
    }
    public function rejectView(){
        $reject = Document::where('status', 'rejected')->get();

        return view('admin.reject', ['rejects' => $reject]);
    }
}
