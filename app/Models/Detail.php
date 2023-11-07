<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
