<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compliance_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('original_filename');
            $table->string('file_type', 10);
            $table->foreignId('document_type_id')->nullable()->constrained('document_types')->nullOnDelete();
            $table->string('status')->default('pending');
            $table->integer('score')->nullable();
            $table->integer('rules_checked')->default(0);
            $table->integer('auto_corrected')->default(0);
            $table->integer('flagged')->default(0);
            $table->string('original_path');
            $table->string('corrected_path')->nullable();
            $table->json('report')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_submissions');
    }
};
