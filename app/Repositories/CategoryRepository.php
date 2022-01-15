<?php

namespace App\Repositories;

use App\Models\Category;
use App\Contacts\CategoryContact;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CategoryRepository extends BaseRepository implements CategoryContact
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function createCategory(array $params)
    {
        $collection = collect($params);
        $image = null;
        if($collection->has('image') && ($params['image'] instanceof UploadFile)) {
            $image = $this->uploadOne($params['image'], 'categories');
        }
        $featured = $collection->has('featured') ? 1 : 0; 
        $menu = $collection->merge(compact('menu', 'image', 'featured'));
        $category = new Category();
        $category->save();
        return $category;
    }

    public function updateCategory(array $params)
    {

    }

    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);

        // if ($category->image != null) {
        // $this->deleteOne($category->image);
        // }
        // $category->delete();

        return $category;
    }

    public function findCategoryById($id)
    {   
        try {
            return $this->findOneOrFail($id);
            
            } catch (ModelNotFoundException $e) {
            
            throw new ModelNotFoundException($e);
            }
    }

    public function listCategories(string $order = 'id', string $sort = 'desc',array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

}
