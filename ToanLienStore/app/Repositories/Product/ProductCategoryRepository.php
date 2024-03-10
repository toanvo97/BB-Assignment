<?php
namespace App\Repositories\Product;

use App\Models\ProductCategory;
use App\Repositories\BaseRepository;

class ProductCategoryRepository extends BaseRepository
{
    public function model()
    {
        return ProductCategory::class;    
    }

    public function filterData($conditions = [])
    {
        return $this->model
        ->where($conditions)
        ->get();
    }
}