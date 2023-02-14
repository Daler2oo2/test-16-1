<?php

namespace App\Interfaces;


interface UserInterface
{
   public function getProfileUsers();
   public function getCityUser($id);
   public function getCityUsers();
   

}