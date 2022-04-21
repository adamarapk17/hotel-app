<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitiesAdmin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $table = 'facilities_admin';
}
