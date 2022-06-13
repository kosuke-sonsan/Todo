<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function addition()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $content = new Todo;
        
        $content->content=$request->input('content');
        
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        $content->save();
        return redirect('/');
    }
}
