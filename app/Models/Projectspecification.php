<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectspecification extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'specification_id', 'value'];
    public function specification()
    {
        return $this->belongsTo(Specification::class, 'specification_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
