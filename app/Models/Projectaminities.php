<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectaminities extends Model
{
    use HasFactory;

    protected $table = 'projectaminities'; // Make sure this matches the actual table name

    // Define the belongsTo relationship with Amenities model
    public function aminities()
    {
        return $this->belongsTo(Amenities::class, 'aminities_id');
    }

    // Define the belongsTo relationship with Project model
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
