<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// php artisan make:migration create_categories_table
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("content"); //almacenar mucha informacion
            $table->text("categoria");
            $table->timestamp("published_at")->nullable();
            $table->timestamps();
            $table->boolean("is_active")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};

// php artisan make:migration add __avatar_to_users_table
          //metodos destructivos
// php artisan migrate   ejecutar las migraciones
// php artisan migrate:rollback   deshacer las migraciones

//php artisan migrate:refresh

//php artisan migrate:fresh