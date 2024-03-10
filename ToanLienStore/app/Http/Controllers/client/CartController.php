<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Services\Product\CartService;
use App\Services\Product\ProductService;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private ProductService $productService;
    private CartService $cartService;

    public function __construct(
        ProductService $productService,
        CartService $cartService
    )
    {
        $this->productService = $productService;
        $this->cartService = $cartService;
    }

    public function index($product_id){
        $user = Sentinel::getUser();
        return view('client.pages.cart', compact('user'));
    }

    public function addProductToCart(Request $request)
    {
        $user = Sentinel::getUser();
        if($user){
            $result = $this->cartService->store($request);
            return response()->json(['message' => 'Add cart successfully!'], 200);
        }else{
            return response()->json(['message' => 'Add cart unsuccessfully, please login!'], 400);
        }
    }
}
