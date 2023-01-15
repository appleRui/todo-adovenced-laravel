<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
      $todos = Todo::all();
      return $todos;
    }

    public function store(TodoRequest $request)
    {
      $todo = new Todo;
      $todo->content = $request->content;
      return $todo->save();
    }

    public function show($id)
    {
      $todo = Todo::find($id);
      return $todo;
    }

    public function update(TodoRequest $request, $id)
    {
      $todo = Todo::find($id);
      $todo->content = $request->content;
      return $todo->save();
    }

    public function destroy($id)
    {
      $todo = Todo::find($id);
      return $todo->delete();
    }
}
