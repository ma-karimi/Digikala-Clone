<?php


namespace App\Repository\Repository;


use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;
use phpDocumentor\Reflection\Types\This;

class UserRepository implements UserRepositoryInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        $sort = request()->sort;

        switch ($sort) {
            case 'all':
            case null:
            default:
                $users = $this->user->paginate(5);
                return $users;
            case 'active':
                $users = $this->user->where('status', 1)->paginate(5);
                return $users;
            case 'deactive':
                $users = $this->user->where('status', 0)->paginate(5);
                return $users;
            case 'admin':
                $users = $this->user->role('admin')->paginate(5);
                return $users;
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}
