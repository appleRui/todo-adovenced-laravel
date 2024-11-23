<?php

namespace App\UseCase\Todo;
use App\Domain\Todo\TodoRepositoryInterface;

class FindTodosUseCase
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @param string $keyword
     * @return Todo[]
     */
    public function execute($keyword = null)
    {
        return $this->todoRepository->findAll($keyword);
    }
}