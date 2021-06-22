<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function items()
    {
        return $this->hasMany('App\Admin\Item', 'category_id');
    }
}
