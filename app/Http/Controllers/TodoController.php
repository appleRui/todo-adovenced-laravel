<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\UseCase\Todo\FindTodosUseCase;
use App\UseCase\Todo\CreateTodoUseCase;
use App\UseCase\Todo\FindTodoByIdUseCase;
use App\UseCase\Todo\UpdateTodoUseCase;
use App\UseCase\Todo\DeleteTodoUseCase;
use Illuminate\Http\Request;

const QUERY_PARAMETER = [
  'KEYWORD' => 'keyword',
];

class TodoController extends Controller
{
    private $findTodosUseCase;
    private $createTodoUseCase;
    private $findTodoByIdUseCase;
    private $updateTodoUseCase;
    private $deleteTodoUseCase;

    public function __construct(
      FindTodosUseCase $findTodosUseCase,
      CreateTodoUseCase $createTodoUseCase,
      FindTodoByIdUseCase $findTodoByIdUseCase,
      UpdateTodoUseCase $updateTodoUseCase,
      DeleteTodoUseCase $deleteTodoUseCase,
    )
    {
      $this->findTodosUseCase = $findTodosUseCase;
      $this->createTodoUseCase = $createTodoUseCase;
      $this->findTodoByIdUseCase = $findTodoByIdUseCase;
      $this->updateTodoUseCase = $updateTodoUseCase;
      $this->deleteTodoUseCase = $deleteTodoUseCase;
    }

    public function index(Request $request)
    {
      $keyword = $request->query(QUERY_PARAMETER['KEYWORD']);
      return $this->findTodosUseCase->execute($keyword);
    }

    public function store(TodoRequest $request)
    {
      return $this->createTodoUseCase->execute($request->content);
    }

    public function show($id)
    {
      return $this->findTodoByIdUseCase->execute($id);
    }

    public function update(TodoRequest $request, $id)
    {
      return $this->updateTodoUseCase->execute($id, $request->content);
    }

    public function destroy($id)
    {
      return $this->deleteTodoUseCase->execute($id);
    }

    public function search($keyword)
    {
      return $this->findTodosUseCase->execute($keyword);
    }
}
