<?php

namespace App\Repositories;

use App\Contacts\BaseContact;
use Illuminate\Database\Eloquent\Model;


/**
* Class BaseRepository
*
* @package \App\Repositories
*/
class BaseRepository implements BaseContact {
        protected $model;

        public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function create(array $attribue){
        return $this->model->create($attribue);
    }
    public function all($column = array('*'), string $orderBy = 'id', string $sortBy = 'desc') {
        return $this->model->orderBy($orderBy, $sortBy)->get($column);
    }
    public function update(array $attributes, int $id) : bool
    {
        return $this->find($id)->update($attributes);
    }
    public function find(int $id) {
        return $this->model->find($id);
    }
    public function findOneOrFail(int $id) {
        return $this->model->findOneBy($id);
    }
    public function findBy(array $data) {
        return $this->model->where($data)->all();
    }
    public function findOneBy(int $data) {
        return $this->model->where($data)->findOneOrFail();
    }
    public function delete(int $id) {
        return $this->model->delete($id);
    }
}