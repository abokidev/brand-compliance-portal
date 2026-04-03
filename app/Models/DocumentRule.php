<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentRule extends Model
{
    protected $fillable = [
        'document_type_id',
        'rule_type',
        'element',
        'description',
        'correction_mode',
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

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
