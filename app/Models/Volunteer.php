<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'birth_place',
        'experience',
        'image_url'
    ];

    /**
     * Relationships (if any).
     * 
     * For example, if a volunteer participates in many projects, 
     * you could define that relationship here.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_volunteer');
    }
}
