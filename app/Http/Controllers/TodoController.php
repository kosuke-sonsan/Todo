<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
        public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteSeviceProvider::HOME);
    }
    public function index()
    {
        $user = Auth::id();
        if (Auth::check()) {
            return view('layouts/layout');
        } else {
            return view('auth/login');
        }
        $items = Todo::all();
        return view('index', compact('items'));
    }
    public function keyword(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Todo::query();
        
        if(!empty($keyword)) {
            $query->where('content', 'LIKE', "%{$keyword}%");
        }
        $posts = $query->get()->paginate(10);
        return view("layout", compact('posts', 'keyword'));
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        $user = Auth::id();
        Todo::create($form);
        return redirect('/');
    }
    public function update(Request $request): Response
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
        return view('index', ['items' => $data]);
    }
    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
