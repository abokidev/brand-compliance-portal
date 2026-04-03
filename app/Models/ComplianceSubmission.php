<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplianceSubmission extends Model
{
    protected $fillable = [
        'original_filename',
        'file_type',
        'document_type_id',
        'status',
        'score',
        'rules_checked',
        'auto_corrected',
        'flagged',
        'original_path',
        'corrected_path',
        'report',
        'submitted_at',
    ];

    protected function casts(): array
    {
        return [
            'report' => 'array',
            'submitted_at' => 'datetime',
        ];
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
