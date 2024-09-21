<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // Fetch current and completed projects
        $currentProjects = Project::where('status', 'in_progress')->paginate(6);  // 6 per page
        $completedProjects = Project::where('status', 'completed')->paginate(6);  // 6 per page



        if ($request->ajax()) {
            Log::info('Type received: ' . $request->type); // Logs the type


            if ($request->type === 'current') {
                return view('project.partials.current_projects', compact('currentProjects'))->render();
            }

            if ($request->type === 'completed') {
                return view('project.partials.completed_projects', compact('completedProjects'))->render();
            }
        }

        return view('project.index', compact('currentProjects', 'completedProjects'));
    }

    /**
     * Display the specified project.
     */
    public function show($id)
    {
        // Fetch the project by its ID
        $project = Project::findOrFail($id);

        return view('project.show', compact('project'));
    }
}
