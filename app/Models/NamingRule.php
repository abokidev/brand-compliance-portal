<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NamingRule extends Model
{
    protected $fillable = [
        'rule_type',
        'correct_form',
        'wrong_variants',
        'notes',
        'is_active',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'wrong_variants' => 'array',
            'is_active' => 'boolean',
            'is_published' => 'boolean',
        ];
    }
}
