<?php

namespace App\UseCase\Todo;
use App\Domain\Todo\TodoRepositoryInterface;

class CreateTodoUseCase
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