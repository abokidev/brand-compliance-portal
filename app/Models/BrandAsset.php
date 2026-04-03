<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandAsset extends Model
{
    protected $fillable = [
        'category',
        'name',
        'file_path',
        'file_name',
        'file_size',
        'is_active',
        'archived_path',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
