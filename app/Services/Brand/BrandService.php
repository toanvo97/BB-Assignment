<?php
namespace App\Services\Brand;

use app\Enum\Pagedefine;
use App\Repositories\Brand\BrandRepository;

class BrandService
{
    protected BrandRepository $brandRepo;
    
    public function __construct(
        BrandRepository $brandRepo
    )
    {
        $this->brandRepo = $brandRepo;
    }

    public function filterData()
    {
        $conditions = ['status' => Pagedefine::Active];
        return $this->brandRepo->filterData($conditions);
    }
}