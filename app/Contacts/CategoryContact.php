<?php

namespace App\Contacts;

interface CategoryContact{
    public function createCategory(array $params);
    public function updateCategory(array $params);
    public function deleteCategory($id);
    public function findCategoryById(int $id);
    public function listCategories(string $order = 'id', string $sort = 'desc',
array $columns = ['*']);
}