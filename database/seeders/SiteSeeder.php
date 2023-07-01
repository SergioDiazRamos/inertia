<?php

namespace Database\Seeders;

use App\Models\Admin\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'title' => 'Inertia',
            'shortTitle' => 'int',
            'separator' => ' :: ',
            'description' => 'Descripción de la apllicación',
            'lema' => 'Lema de la apllicación',
            'author' => '@Diseinuak',
        ]);
    }
}
