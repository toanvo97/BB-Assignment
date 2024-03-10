<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Services\Comment\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected CommentService $commentService;

    public function __construct(
        CommentService $commentService
    )
    {
       $this->commentService = $commentService; 
    }

    public function storeComment($product_id, $user_id)
    {
        $comments = $this->commentService->store($product_id);

        return view();
    }
}
