<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goods_id')->nullable()->constrained('goods')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->integer('price')->nullable()->unsigned();
            $table->integer('stock')->nullable()->unsigned()->default(999999);
            $table->boolean('is_active')->nullable()->default(true);
            $table->foreignId('created_by')->nullable()->constrained('members')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('members')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
