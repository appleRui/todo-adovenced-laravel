<?php

namespace App\UseCase\Todo;

use App\Domain\Todo\TodoRepositoryInterface;
use App\UseCase\UseCaseInterface;
use PhpParser\Node\Expr\FuncCall;

class CreateTodoUseCase implements UseCaseInterface
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @param string $content
     * @return Todo
     */
    public function execute($content)
    {
        return $this->todoRepository->create($content);
    }
}
