<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Menu;
use App\Models\Admin\Menuitem;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Diseinuak',
            'email' => 'sergio@diseinuak.com',
        ]);

        $this->call([MenuSeeder::class]);

        // $menu = Menu::find(1);
        // $menuItems = Menuitem::all();

        // $menu->menuitems()->saveMany($menuItems);
    }
}
