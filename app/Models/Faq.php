<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    // Specify the table if necessary (Laravel will assume plural by default)
    protected $table = 'faqs';

    // Allow mass assignment for the fields you want to insert
    protected $fillable = ['question', 'answer'];
}
