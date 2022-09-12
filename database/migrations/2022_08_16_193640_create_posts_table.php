<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constranted('users')->cascadeOnDelete();
            $table->foreignId('category_id')->constranted('categories')->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('excerpt');
            $table->longText('content');
            $table->string('feature_image');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('status',[0,1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
