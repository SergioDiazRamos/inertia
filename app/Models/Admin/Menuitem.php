<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menuitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'component',
        'icon',
        'parameter',
        'type',
    ];

    protected $attributes = [
        'name' => '',
        'slug' => '',
        'component' => '',
        'icon' => '',
        'parameter' => '',
        'type' => '',
    ];

    public $timestamps = false;

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class);
    }
}
