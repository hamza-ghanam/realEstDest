<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'price'
    ];

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function developer()
    {
        return $this->belongsTo(User::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
