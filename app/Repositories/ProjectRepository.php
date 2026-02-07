<?php
namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public function published(int $limit = 10)
    {
        return Project::where('is_published', true)
          ->latest('published_at')
          ->limit($limit)
          ->get();
    }

    public function featured(int $limit = 10)
    {
        return Project::where('is_featured', true)
          ->latest('is_featured')
          ->limit($limit)
          ->get();
    }

    public function paginate(?int $categoryId = null, int $perPage = 9)
    {
        return Project::query()
          ->where('is_published', true)
          ->when($categoryId, fn ($q) => $q->where('category_id', $categoryId))
          ->latest('published_at')
          ->paginate($perPage)
          ->withQueryString();
    }
}
