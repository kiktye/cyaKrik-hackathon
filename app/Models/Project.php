<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'image_url'
    ];

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class, 'project_volunteer');
    }
}
