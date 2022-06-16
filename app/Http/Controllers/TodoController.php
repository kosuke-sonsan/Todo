<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
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
        $items = DB::select('select * from todos');
        $recode = ['content'=>$items];
        $time = ['created_at'=>$items];
        
        return view('index',$recode, $time);
    }
}
