<?php
namespace App\Services\Comment;

use App\Repositories\Comment\CommentRepository;
use Illuminate\Http\Request;

class CommentService
{
    protected CommentRepository $commentRepo; 

    public function __construct(
        CommentRepository $commentRepo
    )
    {
        $this->commentRepo = $commentRepo;
    }

    public function filterData($product_id)
    {
        $conditions = ['product_id' => $product_id];
        return $this->commentRepo->filterData($conditions);
    }

    public function store(
        Request $request,
        int $product_id, 
        int $user_id
    )
    {
        return $this->commentRepo->store($request, $product_id, $user_id);
    }
}