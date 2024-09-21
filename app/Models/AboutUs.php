<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    // Define the table if necessary (Laravel will automatically assume 'about_uses' as plural)
    protected $table = 'about_us';

    // Define the fillable fields
    protected $fillable = [
        'title',
        'part_one',
        'part_two',
        'mission',
        'vision',
        'values',
    ];
}
