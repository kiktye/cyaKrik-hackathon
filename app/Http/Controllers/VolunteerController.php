<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\Project;

class VolunteerController extends Controller
{
    public function index()
    {
        // Get all volunteers and their projects
        $volunteers = Volunteer::with('projects')->get();

        // Pass data to the view
        return view('volunteers.index', compact('volunteers'));
    }
}
