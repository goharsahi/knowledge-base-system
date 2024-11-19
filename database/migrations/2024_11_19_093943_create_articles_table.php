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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid("id");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("title");
            $table->string("summary");
            $table->text("detail");
            $table->string("reference");
            $table->boolean("is_published")->default(false);
            $table->integer("heart_count")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
