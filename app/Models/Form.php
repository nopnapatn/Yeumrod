<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Form extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['id', 'check_in', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'form_id');
    }

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id');
    }
}
