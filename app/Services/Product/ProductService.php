<?php
namespace App\Services\Product;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    protected ProductRepository $productRepo;

    public function __construct(
        ProductRepository $productRepo
    )
    {
        $this->productRepo = $productRepo;
    } 
    
    public function getListProduct(Request $request = null)
    {
        return $this->productRepo->getListProduct($request);
    }    

    public function findById($id)
    {
        return $this->productRepo->findById($id);
    }
}