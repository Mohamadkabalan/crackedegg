<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;
    protected function afterCreate(): void
    {
        $data = $this->data;

        $this->record->seoMeta()->create([
          'title'       => $data['seo_title'] ?? null,
          'description' => $data['seo_description'] ?? null,
          'keywords'    => $data['seo_keywords'] ?? null,
          'og_image' => $data['seo_og_image_path'] ?? null,
        ]);
    }

    protected function normalizeFile($file): ?string
    {
        if (is_array($file)) {
            return $file[0] ?? null;
        }
        return $file;
    }

}
