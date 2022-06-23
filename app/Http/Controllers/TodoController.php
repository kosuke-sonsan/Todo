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
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $article = $request->all();
        unset($article['_token']);
        Todo::where('id', $request->id)->update($article);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $data = Todo::find($request->id);
        return view('/', ['items' => $data]);
    }
}
