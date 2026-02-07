<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;


    protected function afterSave(): void
    {
        $data = $this->data;

        $this->record->seoMeta()->updateOrCreate(
          [],
          [
            'title'       => $data['seo_title'] ?? null,
            'description' => $data['seo_description'] ?? null,
            'keywords'    => $data['seo_keywords'] ?? null,
            'og_image' => $data['seo_og_image_path'] ?? null,
          ]
        );
    }
    protected function normalizeFile($file): ?string
    {
        if (is_array($file)) {
            return $file[0] ?? null; // take first file
        }

        return $file;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $seo = $this->record->seoMeta;

        if ($seo) {
            $data['seo_title'] = $seo->title;
            $data['seo_description'] = $seo->description;
            $data['seo_keywords'] = $seo->keywords;
            $data['seo_og_image_path'] = $seo->og_image;
            $data['seo_og_image'] = $seo->og_image;
        }

        return $data;
    }
}
