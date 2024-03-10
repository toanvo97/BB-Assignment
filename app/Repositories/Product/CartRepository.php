<?php
namespace App\Repositories\Product;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class CartRepository extends BaseRepository
{
    public function model()
    {
        return Cart::class;    
    }

    public function filterData($conditions = [])
    {
        return $this->model
        ->where($conditions)
        ->get();
    }

    public function store(Request $request)
    {
        $user = Sentinel::getUser();
        return $this->model->create(
            [
                'product_id' => $request->product_id,
                'user_id' => $user->id,
                'quantity' => $request->quantity ?? 1,
            ]
        );
    }
}