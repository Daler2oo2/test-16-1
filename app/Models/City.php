<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillabel = ['id', 'name','country_id'];

    public $timestamps = false;

    public function user() {
        return $this->hasMany(User::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

}
