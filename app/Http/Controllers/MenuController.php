<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function __invoke()
    {
        return [
            [
                "id" => "b2a56e26-f4c6-4dce-a5c2-cbf4e7219056",
                "name" => "Home",
                "component" => "Home",
                "href" => '/',
            ],
            [
                "id" => "e26f7700-513d-4e6c-ba5f-3cfe763eea4e",
                "name" => "Work",
                "component" => "Work",
                "href" => '/work',
            ],

        ];
    }
}
