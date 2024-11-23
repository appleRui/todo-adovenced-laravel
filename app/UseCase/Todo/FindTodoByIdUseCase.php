<?php

namespace App\UseCase\Todo;
use App\Domain\Todo\TodoRepositoryInterface;

class FindTodoByIdUseCase
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
        return $this->todoRepository->findById($id);
    }
}