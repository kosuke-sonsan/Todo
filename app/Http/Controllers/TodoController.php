<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $items = [
            Todo::select('content', 'created_at')->get(),
            $task = 'content',
            $time = 'created_at',
    ];
        return view('index', compact('content', 'created_at'));
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
    public function update()
    {
    }
}
