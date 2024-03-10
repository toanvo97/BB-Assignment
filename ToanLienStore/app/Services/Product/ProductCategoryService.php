<?php
namespace App\Services\Product;

use App\Enum\Pagedefine;
use App\Repositories\Product\ProductCategoryRepository;

class ProductCategoryService
{
    protected ProductCategoryRepository $productCategoryRepo; 

    public function __construct(
        ProductCategoryRepository $productCategoryRepo
    )
    {
        $this->productCategoryRepo = $productCategoryRepo;
    }

    public function filterData()
    {
        $conditions = ['status' => Pagedefine::Active];
        return $this->productCategoryRepo->filterData($conditions);
    }
}