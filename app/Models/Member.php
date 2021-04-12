<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'dob' => 'datetime:Y-m-d',
    ];

    protected $guarded = [];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
