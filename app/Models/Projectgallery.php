<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectgallery extends Model
{
    use HasFactory;

    protected $table = 'projectgalleries';

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
