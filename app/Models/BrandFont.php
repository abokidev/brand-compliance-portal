<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandFont extends Model
{
    protected $fillable = [
        'name',
        'role',
        'file_path',
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
