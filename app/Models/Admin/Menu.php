<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $attributes = [
        'name' => '',
        'description' => ''
    ];

    public $timestamps = false;

    public function menuitems(): BelongsToMany
    {

        return $this->belongsToMany(Menuitem::class)
            ->withPivot('order')
            ->orderBy('menu_menuitem.order');
    }

    public function mainMenu(): BelongsToMany
    {
        return $this->belongsToMany(Menuitem::class)
            ->withPivot('order')
            ->orderBy('menu_menuitem.order');
    }

}
