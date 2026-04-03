<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandColour extends Model
{
    protected $fillable = [
        'name',
        'hex',
        'role',
        'is_active',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'is_published' => 'boolean',
        ];
    }
}
