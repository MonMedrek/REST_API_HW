<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $fillable = [
        'name',
        'surname',
        'telephone-number',
        'street',
        'city',
        'country',
    ];
    protected $table =['People'];
    use HasFactory;
}
