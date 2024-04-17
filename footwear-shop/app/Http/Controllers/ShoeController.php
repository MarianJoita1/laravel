<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index() {
        
        return view('shoes.index', [
            'shoes' => Shoe::latest()->filter(request(['search','lowest','highest', 'gender']))->get()
        ]);
    }

    public function create() {
        return view('shoes.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'brand' => 'required',
            'price' => 'required',
            'gender' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Shoe::create($formFields);
        return redirect('/')->with('message','Added successfully!');
    }

    public function show(Shoe $shoe) {
        return view('shoes.show', [
            'shoe'=>$shoe,
            'request' => request()
        ]);
    }

    public function delete(Shoe $shoe) {
        // if($shoe->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized action');
        // }
        $shoe->delete();
        return redirect('/')->with('message', 'Entry deleted!');
    }
}
