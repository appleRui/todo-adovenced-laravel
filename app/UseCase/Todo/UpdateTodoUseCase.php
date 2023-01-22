<?php

namespace App\UseCase\Todo;
use App\Domain\Todo\TodoRepositoryInterface;

class UpdateTodoUseCase
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @param int $id
     * @param string $content
     * @return Todo
     */
    public function execute($id, $content)
    {
        return $this->todoRepository->update($id, $content);
    }
}