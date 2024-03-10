<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandService;
use App\Services\Comment\CommentService;
use Illuminate\Http\Request;
use App\Services\Product\ProductCategoryService;
use App\Services\Product\ProductService;

class ProductsController extends Controller
{
    private ProductService $productService;
    private ProductCategoryService $productCategoryService;
    private BrandService $brandService;
    private CommentService $commentService;

    public function __construct(
        ProductService $productService,
        ProductCategoryService $productCategoryService,
        BrandService $brandService,
        CommentService $commentService
    )
    {
        $this->productService = $productService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;
        $this->commentService = $commentService;
    }

    public function index()
    {
        $products = $this->productService->getListProduct();
        $categories = $this->productCategoryService->filterData();
        $brands = $this->brandService->filterData();
        return view('client.pages.products', 
            compact(
                'products',
                'categories',
                'brands'
                )
            );
    }

    public function fetchProduct(Request $request)
    {
        $products = $this->productService->getListProduct($request);
        $categories = $this->productCategoryService->filterData();
        $brands = $this->brandService->filterData();
        return view('client.pages.product_ajax', compact('products'));
    }

    public function show($id){
        $product = $this->productService->findById($id);
        $comments = $this->commentService->filterData($id);
        return view('client.pages.productDetail', compact('product', 'comments'));
    }
}
