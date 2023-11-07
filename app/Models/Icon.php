<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function configurations()
    {
        return $this->hasMany(Configuration::class);
    }
}
