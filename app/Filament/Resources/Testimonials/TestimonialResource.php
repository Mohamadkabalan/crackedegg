<?php

namespace App\Filament\Resources\Testimonials;

use App\Filament\Resources\Testimonials\Pages\CreateTestimonial;
use App\Filament\Resources\Testimonials\Pages\EditTestimonial;
use App\Filament\Resources\Testimonials\Pages\ListTestimonials;
use App\Filament\Resources\Testimonials\Schemas\TestimonialForm;
use App\Filament\Resources\Testimonials\Tables\TestimonialsTable;
use App\Models\Testimonial;
use BackedEnum;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\{
  TextInput,
  Textarea,
  Select,
  Toggle,
  FileUpload,
  RichEditor,
  DateTimePicker
};

use Filament\Tables\Columns\{
  ImageColumn,
  TextColumn,
  IconColumn
};
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Testimonial';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
          TextInput::make('name')->required(),
          TextInput::make('company')->required(),
          TextInput::make('position')->required(),
          Textarea::make('content')->required(),
          FileUpload::make('image')
            ->label('Image ( 642 x 700 )')
            ->image()
            ->directory('testimonials')
            ->disk('public')
            ->required(),
          TextInput::make('rating')->required(),
          TextInput::make('order')->default(1),
          Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
          TextColumn::make('name')
            ->searchable(),
          TextColumn::make('company')
            ->searchable(),
          TextColumn::make('position')
            ->searchable(),
          TextColumn::make('rating'),
          TextColumn::make('order'),
          IconColumn::make('is_active')
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
            'index' => ListTestimonials::route('/'),
            'create' => CreateTestimonial::route('/create'),
            'edit' => EditTestimonial::route('/{record}/edit'),
        ];
    }
}
