<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'txtDescription','status', 'map', 'image', 'location', 'order_number',
        'category_id', 'logo', 'chkHomepage',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }

    public function projectsliders()
    {
        return $this->hasMany(Projectslider::class, 'project_id');
    }

    public function projectspecifications()
    {
        return $this->hasMany(Projectspecification::class, 'project_id');
    }

    public function projectaminities()
    {
        return $this->hasMany(Projectaminities::class, 'project_id');
    }

    public function projectfloorplans()
    {
        return $this->hasMany(Projectfloorplan::class, 'project_id');
    }

    public function projectvideos()
    {
        return $this->hasMany(Projectvideo::class, 'project_id');
    }

    public function projectgalleries()
    {
        return $this->hasMany(Projectgallery::class, 'project_id');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('category_id', 1);
    }

    public function scopecompleted($query)
    {
        return $query->where('category_id', 2);
    }
    public function scopeongoing($query)
    {
        return $query->where('category_id', 3);
    }

}
