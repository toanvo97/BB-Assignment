<?php
namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository
{
    public function model()
    {
        return Product::class;
    }

    public function getListProduct(Request $request = null)
    {
        $query = $this->model
        ->query();

        if(isset($request->category_id)){
            $query = $query->whereHas('categories', function($queryBuilder) use($request){
                return $queryBuilder->whereIn('category_id', $request->category_id);
            });
        }

        if(isset($request->brand_id)){
            $query = $query->whereIn('brand_id', $request->brand_id);
        }

        if(isset($request->min_price) && $request->min_price >= 0){
            $query = $query->where('price','>=', $request->min_price);
        }

        if(isset($request->max_price) && $request->max_price >= 0){
            $query = $query->where('price','<=', $request->max_price);
        }

        if(isset($request->sort_price)){
            $query = $query->orderBy('price', $request->sort_price);
        }

        if(isset($request->sort_amount)){
            $query = $query->orderBy('quantity', 'asc');
        }
        return $query->paginate(20);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }
}