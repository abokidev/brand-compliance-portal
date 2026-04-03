<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToneTag extends Model
{
    protected $fillable = [
        'tag',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
