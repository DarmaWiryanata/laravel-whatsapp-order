<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['category_id', 'flag_id', 'name', 'img', 'old_price', 'new_price'];

    static function firstMenu($id)
    {
        $data = Menu::whereId($id)->first();

        return $data;
    }
}
