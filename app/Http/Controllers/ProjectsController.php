<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request
    ) {
        $categoryId = $request->integer('category');

        $categories = Category::query()
          ->with(['projects' => function ($q) {
              $q->where('is_published', 1)
                ->latest();
          }])
          ->get();

        return view('projects', [
          'categories' => $categories,
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
