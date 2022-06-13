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
    public function store(Request $request)
    {
        $content = new Todo;
        
        $content->content=$request->input('content');
        
        $content->save();
        return redirect('/');
    }
    public function index()
    {
        $task = DB::select('select * from todo');
        $data = ['content' => $task];
        return view('todo.todocheck', $data);
    }
}
