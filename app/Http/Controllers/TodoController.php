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
        $request->validate([
            'content' => 'required|max20'
        ]);
        $content = new Todo;
        $form = $request->all();
        unset ($form['_token_']);
        return redirect('/');
    }
    public function index()
    {
        $task = DB::select('select * from todo');
        $data = ['task' => $task];
        return view('todo.todocheck', $data);
    }
}
