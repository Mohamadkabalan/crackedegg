<?php

namespace App\Filament\Resources\HeroBanners;

use App\Filament\Resources\HeroBanners\Pages\CreateHeroBanner;
use App\Filament\Resources\HeroBanners\Pages\EditHeroBanner;
use App\Filament\Resources\HeroBanners\Pages\ListHeroBanners;
use App\Filament\Resources\HeroBanners\Schemas\HeroBannerForm;
use App\Filament\Resources\HeroBanners\Tables\HeroBannersTable;
use App\Models\HeroBanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class HeroBannerResource extends Resource
{
    protected static ?string $model = HeroBanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Hero Banner';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
          TextInput::make('heading')
            ->required()
            ->maxLength(100),

          TextInput::make('title')
            ->required(),

          Textarea::make('description')
            ->rows(3),

          FileUpload::make('image1')
            ->label('Image 1 ( 487 X 672 )')
            ->image()
            ->disk('public')
            ->directory('hero'),

          FileUpload::make('image2')
            ->label('Image 2  ( 240 X 223 )')
            ->image()
            ->disk('public')
            ->directory('hero'),

          FileUpload::make('image3')
            ->label('Image 3 ( 171 X 104 )')
            ->image()
            ->disk('public')
            ->directory('hero'),

          Toggle::make('is_active')
            ->default(true),

          TextInput::make('order')
            ->numeric()
            ->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
          ->columns([
            TextColumn::make('heading')
              ->limit(30)
              ->searchable(),

            TextColumn::make('title')
              ->limit(40)
              ->searchable(),

            ImageColumn::make('image1')
              ->label('Image')
              ->disk('public')
              ->size(60),

            IconColumn::make('is_active')
              ->boolean(),

            TextColumn::make('order')
              ->sortable(),
          ])
          ->defaultSort('order');
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
            'index' => ListHeroBanners::route('/'),
            'create' => CreateHeroBanner::route('/create'),
            'edit' => EditHeroBanner::route('/{record}/edit'),
        ];
    }
}
