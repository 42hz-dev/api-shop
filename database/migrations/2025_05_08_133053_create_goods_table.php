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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->nullable()->constrained('models')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnDelete();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable()->unsigned();
            $table->integer('stock')->nullable()->unsigned()->default(999999);
            $table->string('thumbnail')->nullable();
            $table->string('simg1')->nullable();
            $table->string('simg2')->nullable();
            $table->string('simg3')->nullable();
            $table->string('simg4')->nullable();
            $table->string('simg5')->nullable();
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
        Schema::dropIfExists('goods');
    }
};
