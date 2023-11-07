<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Driver extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['id', 'first_name'];

    public function form()
    {
        return $this->belongsTo(Form::class, 'driver_id');
    }

    public function cars()
    {
        return $this->hasOne(Car::class, 'driver_id');
    }

    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
