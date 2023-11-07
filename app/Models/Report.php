<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Report extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['id', 'created_at', 'form_id'];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class, 'form_id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'payment_id');
    }

    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
