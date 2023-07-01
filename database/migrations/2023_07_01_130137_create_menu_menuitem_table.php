<?php

use App\Models\Admin\Menu;
use App\Models\Admin\Menuitem;
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
        Schema::create('menu_menuitem', function (Blueprint $table) {
            $table->foreignIdFor(Menu::class)->constrained();
            $table->foreignIdFor(Menuitem::class)->constrained();
            $table->primary(['menu_id', 'menuitem_id']);
            $table->integer("order")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_menuitem');
    }
};
