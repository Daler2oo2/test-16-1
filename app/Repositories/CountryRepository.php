<?php 

namespace App\Repositories;

use App\Interfaces\CountryInterface;
use App\Models\Country;

class CountryRepository implements  CountryInterface
{
    public function getCountries()
    {
        return Country::with('cities')->get();
    }

    public function getUsers()
    {
        //return Country::find(1)->users()->get();
        return Country::with('users')->get();

    }
}