<?php

namespace Database\Seeders;

use App\Models\Admin\Menu;
use App\Models\Admin\Menuitem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Menu
        $menu = Menu::factory()->create(
            [
                'name' => 'Main'
            ]
        );

        // Create three Menuitems
        Menuitem::factory()->create(
            [
                'name' => 'Home',
                'slug' => '/'
            ],
        );
        Menuitem::factory()->create(
            [
                'name' => 'About',
                'slug' => '/about'
            ],
        );
        Menuitem::factory()->create(
            [
                'name' => 'Contact',
                'slug' => '/contact'
            ],
        );

        // Atach Menuitems to Menu in pivot table
        $menu->menuitems()->saveMany(Menuitem::all());
    }
}
