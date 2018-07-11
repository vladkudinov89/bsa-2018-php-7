<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 11.07.18
 * Time: 5:43
 */

namespace App\Services;


use App\Entity\User;
use App\Requests\SaveUserRequest;
use Illuminate\Support\Collection;


class UserService implements UserServiceInterface
{
    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
        return User::all();
    }

    public function findById(int $id): ?User
    {
        // TODO: Implement findById() method.
        return User::find($id) ? User::find($id) : null;
    }

    public function save(SaveUserRequest $request): User
    {
        // TODO: Implement save() method.
        $userId = $request->getId();
        if($userId !== null){
            $user = User::find($userId);
        }else{
            $user = new User;
            $user->name = $request->getName();
            $user->email = $request->getEmail();
            $user->save();
        }
        return $user;
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
        User::destroy($id);
    }

}