<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'location_page',
        'name',
        'value',
        'type',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
