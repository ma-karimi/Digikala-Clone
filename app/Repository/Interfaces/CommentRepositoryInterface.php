<?php


namespace App\Repository\Interfaces;


interface CommentRepositoryInterface
{
    public function all();

    public function delete($comment);

    public function delete_all($comments);

    public function status($request,$comment);
}
