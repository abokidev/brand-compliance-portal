<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandLogo extends Model
{
    protected $fillable = [
        'name',
        'usage_context',
        'file_path',
        'file_name',
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
