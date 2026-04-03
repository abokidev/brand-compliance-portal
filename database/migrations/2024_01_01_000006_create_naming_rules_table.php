<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('naming_rules', function (Blueprint $table) {
            $table->id();
            $table->string('rule_type');
            $table->string('correct_form', 255);
            $table->json('wrong_variants');
            $table->text('notes')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('naming_rules');
    }
};
