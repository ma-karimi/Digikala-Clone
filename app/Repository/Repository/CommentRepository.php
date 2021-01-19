<?php


namespace App\Repository\Repository;


use App\Models\Comment;
use App\Repository\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{

    public function all()
    {
        $comments = Comment::with('user','product')->where('status',0)->paginate(4);
        return $comments;
    }

    public function delete($comment)
    {
        $comment->delete();
    }

    public function delete_all($comments)
    {
        foreach ($comments as $comment){
            $comment->delete();
        }
    }

    public function status($request, $comment)
    {
        $comment->status->update([
            'status' => !$comment->status,
        ]);
    }
}
