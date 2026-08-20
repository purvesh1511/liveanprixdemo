<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('category', ['web', 'shopify', 'seo', 'marketing'])->default('web');
            $table->string('type')->nullable();
            $table->string('type_color')->default('green');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('technology')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->json('features')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
