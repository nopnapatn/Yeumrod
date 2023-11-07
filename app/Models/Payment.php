<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Payment extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['id', 'form_id', 'price', 'type', 'date', 'first_name',];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class, 'form_id');
    }

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class, 'report_id');
    }

    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
