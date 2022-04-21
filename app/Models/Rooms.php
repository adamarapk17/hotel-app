<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $table = "rooms";

    public function roomsBuknow()
    {
        return $this->hasMany('App\Models\Rooms');
    }
}
