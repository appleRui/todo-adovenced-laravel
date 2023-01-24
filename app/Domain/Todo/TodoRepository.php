<?php

namespace App\Domain\Todo;

use App\Models\Todo;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TodoRepository implements TodoRepositoryInterface
{
    public function findAll($keyword = null)
    {
      if($keyword == null) return Todo::all();
      
      return Todo::where('content', 'like', "%$keyword%")->get();
    }

    public function create($content)
    {
      $todo = new Todo;
      $todo->content = $content;
      return $todo->save();
    }

    public function findById($id)
    {
      $todo = Todo::find($id);
      if($todo == null) throw new HttpException(404, 'Not Found');
      return $todo;
    }

    public function update($id, $content)
    {
      $todo = Todo::find($id);
      if($todo == null) throw new HttpException(404, 'Not Found');
      $todo->content = $content;
      return $todo->save();
    }

    public function delete($id)
    {
      $todo = Todo::find($id);
      if($todo == null) throw new HttpException(404, 'Not Found');
      return $todo->delete();
    }
}