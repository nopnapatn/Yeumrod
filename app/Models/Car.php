<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Car extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['id', 'name', 'brand', 'seat', 'price'];

    public function form()
    {
        return $this->hasMany(Form::class, 'car_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
