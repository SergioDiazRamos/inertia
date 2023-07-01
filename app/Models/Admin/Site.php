<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'title',
        'shortTitle',
        'separator',
        'description',
        'lema',
        'author',
    ];

    protected $attributes = [
        'title' => '',
        'shortTitle' => '',
        'separator' => '',
        'description' => '',
        'lema' => '',
        'author' => '',
    ];

    public $timestamps = false;
}
