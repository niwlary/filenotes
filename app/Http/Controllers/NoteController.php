<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NoteController extends Controller
{
    public function dashboard()
    {
        $notes = Note::where('user_id','=',Auth::user()->id)
            ->get();
        return view('dashboard', compact('notes'));
    }

    public function create(request $request){
        $request->validate([
           'title' => 'required',
           'content' => 'required',
           'color' => 'required',

        ], [
            'required' => "O campo :attribute é obrigatório!"
        ]);

        $note = $request->except('_token');
        $note['user_id'] = Auth::user()->id;
         Note::create($note);

         return back();
    }
    public function update(request $request){
        $request->validate([
           'title' => 'required',
           'content' => 'required',
           'color' => 'required',

        ], [
            'required' => "O campo :attribute é obrigatório!"
        ]);

        $note = $request->except('_token');
       
         Note::find($request->id)->update($note);

         return back();
    }
}
