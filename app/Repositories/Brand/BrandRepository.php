<?php
namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepository;

class BrandRepository extends BaseRepository
{
    public function model()
    {
        return Brand::class;
    }

    public function filterData($conditions = [])
    {
        return $this->model
        ->where($conditions)
        ->get();
    }
}