<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroModel extends Model
{
    use HasFactory;

    protected $table = 'dota_heroes';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    protected $fillable = [
        'hero_name',
        'hero_attribute',
        'updated_at',
        'created_at',
    ];
}

