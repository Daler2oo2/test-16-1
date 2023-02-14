<?php 

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements  UserInterface
{
    public function getProfileUsers()
    {
        return User::with('profile')->get();
    }

    public function getCityUser($id)
    {
        return User::with('city')->where('id', '=', $id)->get();
    }

    public function getCityUsers()
    {
        return User::with('city.country')->get();
    }
}