<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Projectslider extends Model
{
    use HasFactory;

   protected $fillable = [
        'project_id', 'image',
    ];

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
