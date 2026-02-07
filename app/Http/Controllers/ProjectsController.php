<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request,
      ProjectRepository $projects
    ) {
        $categoryId = $request->integer('category');
        $categories=Category::all();
        return view('projects', [
          'categories' =>  $categories,
          'projects'   => $projects->paginate($categoryId, perPage: 9),
          'activeCategoryId' => $categoryId,
        ]);

    }
    public function show(Project $project)
    {
        abort_unless($project->is_published, 404);

        // optional: eager load relations you need in details page
        $project->load(['category', 'images', 'videos']);

        return view('project-details', compact('project'));
    }
}
