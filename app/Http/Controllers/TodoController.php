<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', compact('items'));
    }
    public function create(Request $request)
    {
        $content = new Todo;
        
        $content->content=$request->content;
        
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $articles = Todo::find($request->content);
        unset($articles['_token']);
        Todo::where('content', $request->content)->update($request);
        $articles->save();
        return redirect('/todo/update');
    }
}
