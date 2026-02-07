<?php

namespace App\Filament\Forms;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class SeoMetaSchema
{
    public static function make(): array
    {
        return [
          TextInput::make('seo_title')
            ->label('Meta Title')
            ->maxLength(60),

          Textarea::make('seo_description')
            ->label('Meta Description')
            ->rows(3)
            ->maxLength(160),

          TextInput::make('seo_keywords')
            ->label('Keywords'),

          FileUpload::make('seo_og_image')
            ->label('Open Graph Image')
            ->image()
            ->disk('public')
            ->directory('seo')
            ->visibility('public')

            // 🔥 THIS IS THE KEY
            ->saveUploadedFileUsing(function ($file, $set) {
                $path = $file->store('seo', 'public');
                $set('seo_og_image_path', $path);
                return $path;
            }),

        ];
    }
}
