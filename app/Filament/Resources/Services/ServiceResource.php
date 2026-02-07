<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Services\Pages\CreateService;
use App\Filament\Resources\Services\Pages\EditService;
use App\Filament\Resources\Services\Pages\ListServices;
use App\Filament\Resources\Services\Schemas\ServiceForm;
use App\Filament\Resources\Services\Tables\ServicesTable;
use App\Models\Service;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServiceResource extends Resource
{


    protected static ?string $model = Service::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Service';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
          TextInput::make('title')->required(),
          TextInput::make('description')->required(),

          FileUpload::make('icon')
            ->label('Service Image ( 128 X 120 )')
            ->image()
            ->directory('services')
            ->disk('public')
            ->required(),
          Toggle::make('is_featured')->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
          ImageColumn::make('icon')
            ->label('Logo')
            ->size(60),

          TextColumn::make('title')
            ->searchable(),
          TextColumn::make('description')
            ->searchable(),
          IconColumn::make('is_featured')
            ->boolean(),
        ]);
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
            'index' => ListServices::route('/'),
            'create' => CreateService::route('/create'),
            'edit' => EditService::route('/{record}/edit'),
        ];
    }
}
