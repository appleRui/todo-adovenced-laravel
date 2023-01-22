<?php

namespace App\Domain\Todo;

interface TodoRepositoryInterface
{
    /**
     * Get all todos
     * @param string $keyword
     * @return Todo[]
     */
    public function findAll($keyword = null);
    /**
     * Create a new todo
     * @param string $content
     * @return Todo
     */
    public function create($content);
    /**
     * Find a todo by id
     * @param int $id
     * @return Todo
     */
    public function findById($id);
    /**
     * Update a todo
     * @param int $id
     * @param string $content
     * @return Todo
     */
    public function update($id, $content);
    /**
     * Delete a todo
     * @param int $id
     * @return Todo
     */
    public function delete($id);
}