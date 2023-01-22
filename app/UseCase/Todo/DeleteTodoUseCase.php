<?php

namespace App\UseCase\Todo;
use App\Domain\Todo\TodoRepositoryInterface;

class DeleteTodoUseCase
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @param int $id
     * @return Todo
     */
    public function execute($id)
    {
        return $this->todoRepository->delete($id);
    }
}