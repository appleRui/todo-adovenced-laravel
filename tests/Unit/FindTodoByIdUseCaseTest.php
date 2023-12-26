<?php

namespace Tests\Unit;

use App\Domain\Todo\TodoRepository;
use App\UseCase\Todo\FindTodoByIdUseCase;
use Mockery;
use Tests\TestCase;

class FindTodoByIdUseCaseTest extends TestCase
{
	public function test_should_return_todo_for_the_given_id()
	{
		$todoRepositoryMock = new TodoRepositoryMock();
		$todoRepository = Mockery::mock(TodoRepository::class);
		$todoRepository->shouldReceive('findById')->andReturn($todoRepositoryMock->findById(1));

		$findTodoByIdUseCase = new FindTodoByIdUseCase($todoRepository);
		$todo = $findTodoByIdUseCase->execute(1);

		$this->assertEquals(1, $todo["id"]);
	}

	public function test_should_throw_not_found()
	{
		$todoRepositoryMock = new TodoRepositoryMock();
		$todoRepository = Mockery::mock(TodoRepository::class);
		$todoRepository->shouldReceive('findById')->andReturn($todoRepositoryMock->findById(2));

		$findTodoByIdUseCase = new FindTodoByIdUseCase($todoRepository);
		$todo = $findTodoByIdUseCase->execute(1);

		$this->assertEquals(1, $todo["id"]);
	}
}
