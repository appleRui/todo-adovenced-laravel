<?php

use App\Domain\Todo\TodoRepositoryInterface;
use App\Models\Todo;

class TodoRepositoryMock
{
  public function findAll()
  {
    return [
      new Todo([
        'id' => 1,
        'title' => 'Todo 1',
        'description' => 'Todo 1 description',
        'completed' => false,
      ]),
      new Todo([
        'id' => 2,
        'title' => 'Todo 2',
        'description' => 'Todo 2 description',
        'completed' => true,
      ]),
    ];
  }

  public function create($title, $description)
  {
    return new Todo([
      'id' => 3,
      'title' => $title,
      'description' => $description,
      'completed' => false,
    ]);
  }

  public function findById($id)
  {
    return new Todo([
      'id' => $id,
      'title' => 'Todo 1',
      'description' => 'Todo 1 description',
      'completed' => false,
    ]);
  }

  public function update($id, $title, $description, $completed)
  {
    return new Todo([
      'id' => $id,
      'title' => $title,
      'description' => $description,
      'completed' => $completed,
    ]);
  }

  public function delete($id)
  {
    return true;
  }
}
