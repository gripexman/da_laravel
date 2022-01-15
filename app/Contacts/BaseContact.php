<?php

namespace App\Contacts;

interface BaseContact{
    public function create(array $attribue);
    public function all($column = array('*'), string $orderBy = 'id', string $sortBy = 'desc');
    public function update(array $attribue,int $id);
    public function find(int $id);
    public function findOneOrFail(int $id);
    public function findBy(array $data);
    public function findOneBy(int $data);
    public function delete(int $id);
}