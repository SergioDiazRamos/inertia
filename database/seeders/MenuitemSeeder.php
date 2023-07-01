<?php

namespace Database\Seeders;

use App\Models\Admin\Menu;
use App\Models\Admin\Menuitem;
use Illuminate\Database\Seeder;

class MenuitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main = Menu::where('name', '=', 'main')->firstOrFail();

        $home = Menuitem::create([
            'name' => 'Home',
            'slug' => '/'
        ]);
        $main->menuitems()->attach($home->id, ['order' => 0]);


        $about = Menuitem::create([
            'name' => 'About',
            'slug' => '/about'
        ]);
        $main->menuitems()->attach($about->id, ['order' => 1]);

        $contact = Menuitem::create([
            'name' => 'Contact',
            'slug' => '/contact'
        ],);
        $main->menuitems()->attach($contact->id, ['order' => 2]);
    }
}
