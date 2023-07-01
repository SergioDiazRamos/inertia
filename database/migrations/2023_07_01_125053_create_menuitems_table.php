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
        Schema::create('menuitems', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("slug");
            $table->string("component")->nullable();
            $table->string("icon")->nullable();
            $table->string("parameter")->nullable();
            $table->string("type")->nullable();
            // $table->string("role");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuitems');
    }
};
