<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\Project;

class VolunteerController extends Controller
{
    public function index()
    {
        // Fetch all long-term volunteers with their associated projects
        $longTermVolunteers = Volunteer::where('volunteer_type', 'long_term')->with('projects')->get();

        // Fetch short-term volunteers in a similar way
        $shortTermVolunteers = Volunteer::where('volunteer_type', 'short_term')->with('projects')->get();

        // Pass both collections to the view
        return view('volunteer.index', compact('longTermVolunteers', 'shortTermVolunteers'));
    }

    // Show individual volunteer
    public function show($id)
    {
        $volunteer = Volunteer::with('projects')->findOrFail($id);

        return view('volunteer.show', compact('volunteer'));
    }


}
