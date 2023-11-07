<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'value',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
