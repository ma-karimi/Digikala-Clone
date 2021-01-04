<?php


namespace App\Repository\Interfaces;


use App\Models\User;

interface UserRepositoryInterface
{
    public function all();

    public function destroy(User $user);
}
