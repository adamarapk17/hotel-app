<?php

namespace App\Models;

use App\Models\Rooms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }

    public $table = "form";
}
