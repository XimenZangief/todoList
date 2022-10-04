<?php

namespace App\Http\Controllers;

use App\Models\todoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $todolists = todoList::all();
        return view('home',compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        todoList::create($data);
        return back();
    }

    public function destroy(todoList $todoList)
    {
        $todoList->delete();
        return back();
    }
}
