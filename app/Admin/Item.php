<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Admin\Category', 'category_id')->select('id', 'category');
    }
    public function addon()
    {
        return $this->hasMany('App\Admin\AddOn', 'item_id');
    }
    public function size()
    {
        return $this->hasMany('App\Admin\Size', 'item_id');
    }
}
