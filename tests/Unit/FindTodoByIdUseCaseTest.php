<?php

namespace Tests\Unit;

use App\Domain\Todo\TodoRepository;
use App\UseCase\Todo\FindTodoByIdUseCase;
use PHPUnit\Framework\TestCase;
use Mockery;
use TodoRepositoryMock;

class FindTodoByIdUseCaseTest extends TestCase
{
	public function test_should_return_todo_for_the_given_id()
	{
		$method_name = 'findById';
		$mock = Mockery::mock(TodoRepository::class);
		$mock->shouldReceive($method_name)->andReturn(TodoRepositoryMock::findById(1));

		$useCase = new FindTodoByIdUseCase($mock);
		$result = $useCase->execute(1);

		$this->assertEquals(1, $result['id']);
	}
}
