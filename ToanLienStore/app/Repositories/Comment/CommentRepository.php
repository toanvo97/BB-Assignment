<?php
namespace App\Repositories\Comment;

use App\Models\CustomerComment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository
{
    public function model()
    {
        return CustomerComment::class;    
    }

    public function filterData($conditions = [])
    {
        return $this->model
        ->where($conditions)
        ->get();
    }
}