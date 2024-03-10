<?php
namespace App\Services\Product;

use App\Enum\Pagedefine;
use App\Repositories\Product\CartRepository;
use App\Repositories\Product\ProductCategoryRepository;
use Illuminate\Http\Request;

class CartService
{
    protected CartRepository $cartRepo; 

    public function __construct(
        CartRepository $cartRepo
    )
    {
        $this->cartRepo = $cartRepo;
    }

    public function filterData()
    {
        $conditions = ['status' => Pagedefine::Active];
        return $this->cartRepo->filterData($conditions);
    }

    public function store(Request $request) 
    {
        $result = $this->cartRepo->store($request);
        return $result;
    }
}