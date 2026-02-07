<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Schemas\ProjectForm;
use App\Filament\Resources\Projects\Tables\ProjectsTable;
use App\Models\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


use Filament\Forms\Components\{
  TextInput,
  Textarea,
  Select,
  Toggle,
  FileUpload,
  RichEditor,
  DateTimePicker,
  Repeater,
  Grid
};

use Filament\Tables\Columns\{
  ImageColumn,
  TextColumn,
  IconColumn
};
use App\Filament\Forms\SeoMetaSchema;

class ProjectResource extends Resource
{
    protected static ?int $navigationSort = 5;

    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Project';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
          Select::make('category_id')
            ->relationship('category', 'name')
            ->required(),

          TextInput::make('title')
            ->required()
            ->live(onBlur: true)
            ->afterStateUpdated(
              fn ($state, callable $set) =>
              $set('slug', str($state)->slug())
            ),

          TextInput::make('slug')
            ->required()
            ->unique(ignoreRecord: true),

          Textarea::make('excerpt')
            ->rows(3),

          Textarea::make('content')
            ->required()
            ->columnSpanFull(),

          FileUpload::make('featured_image')
            ->label('Featured Image ( 746 X 637 )')
            ->image()
            ->directory('projects')
            ->disk('public')
            ->imageEditor(),

          Toggle::make('is_featured')
            ->default(false),

          Toggle::make('is_published')
            ->default(false),

          DateTimePicker::make('published_at')
            ->visible(fn ($get) => $get('is_published')),
          ...SeoMetaSchema::make(),

          Repeater::make('images')
            ->relationship('images')
            ->label('Project Images (Rendered aspect ratio:	746∶637)')
            ->minItems(1) // ✅ at least 1 image required
            ->reorderable('sort_order')
            ->schema([
              FileUpload::make('path')
                ->label('Image')
                ->image()
                ->required()
                ->disk('public')
                ->directory('projects/gallery')
                ->imageEditor(),
            ])
            ->columnSpanFull(),

          Repeater::make('videos')
            ->relationship('videos')
            ->label('YouTube Videos')
            ->reorderable('sort_order')
            ->schema([
              TextInput::make('source_url')
                ->label('YouTube URL')
                ->required()
                ->url()
                ->rule('regex:/^(https?:\\/\\/)?(www\\.)?(youtube\\.com|youtu\\.be)\\//i')
                ->helperText('Paste a YouTube link (youtube.com or youtu.be).'),
            ])
            ->columnSpanFull(),


        ]);



    }

    public static function table(Table $table): Table
    {
        return $table->columns([
          ImageColumn::make('featured_image')
            ->label('Image')
            ->size(60),

          TextColumn::make('title')
            ->searchable()
            ->sortable(),

          TextColumn::make('category.name')
            ->label('Category'),

          IconColumn::make('is_featured')
            ->boolean(),

          IconColumn::make('is_published')
            ->boolean(),

          TextColumn::make('published_at')
            ->dateTime()
            ->sortable(),
        ])
          ->defaultSort('published_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
    protected static function mutateFormDataBeforeCreate(array $data): array
    {
        $data['_seo'] = [
          'title'       => $data['seo_title'] ?? null,
          'description' => $data['seo_description'] ?? null,
          'keywords'    => $data['seo_keywords'] ?? null,
          'og_image'    => $data['seo_og_image'] ?? null,
        ];

        unset(
          $data['seo_title'],
          $data['seo_description'],
          $data['seo_keywords'],
          $data['seo_og_image']
        );

        return $data;
    }
    protected static function mutateFormDataBeforeSave(array $data): array
    {
        $data['_seo'] = [
          'title'       => $data['seo_title'] ?? null,
          'description' => $data['seo_description'] ?? null,
          'keywords'    => $data['seo_keywords'] ?? null,
          'og_image'    => $data['seo_og_image'] ?? null,
        ];

        unset(
          $data['seo_title'],
          $data['seo_description'],
          $data['seo_keywords'],
          $data['seo_og_image']
        );

        return $data;
    }

    protected static function afterSave($record, array $data): void
    {
        if (! empty($data['_seo'])) {
            $record->seoMeta()->updateOrCreate([], $data['_seo']);
        }
    }

}
