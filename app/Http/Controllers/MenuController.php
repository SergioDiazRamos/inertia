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
                "name" => "About",
                "component" => "About",
                "href" => '/about',
            ],
            [
                "id" => "0630665d-a0b7-4da0-82c0-220a6e864f45",
                "name" => "Contact",
                "component" => "Contact",
                "href" => '/contact',
            ],

        ];
    }
}
