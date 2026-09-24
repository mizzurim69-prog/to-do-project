<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index', [
            'todos' => Todo::all()
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required'
        ]);

        Todo::create($request->only(['title','description','status']));

        return redirect('/todos');
    }

    public function show($id)
    {
        return view('todos.show', [
            'todo' => Todo::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('todos.edit', [
            'todo' => Todo::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required'
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update($request->only(['title','description','status']));

        return redirect('/todos');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/todos');
    }
}
