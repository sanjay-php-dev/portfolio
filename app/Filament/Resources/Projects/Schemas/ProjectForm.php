<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Skill;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Information')
                    ->description('Define the project and how it should appear on your portfolio.')
                    ->icon('heroicon-o-briefcase')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->label('Project Title')
                            ->placeholder('e.g. Portfolio Website')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->placeholder('e.g. portfolio-website')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Textarea::make('description')
                            ->label('Short Description')
                            ->placeholder('Brief description of the project...')
                            ->rows(3)
                            ->maxLength(500),

                        TextInput::make('project_url')
                            ->label('Project URL')
                            ->placeholder('https://example.com')
                            ->url()
                            ->maxLength(255),

                        Select::make('technologies')
                            ->label('Technologies')
                            ->options(
                                Skill::query()
                                    ->where('is_active', true)
                                    ->orderBy('sort_order')
                                    ->orderBy('name')
                                    ->pluck('name', 'id')
                                    ->toArray()
                            )
                            ->searchable()
                            ->preload()
                            ->placeholder('Select technologies')
                            ->helperText('Select the skills/technologies used in this project.'),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->minValue(0)
                            ->default(0)
                            ->required()
                            ->helperText('Lower numbers appear first.'),
                    ])
                    ->columns(2),

                Section::make('Project Image')
                    ->description('Upload the image displayed for this project.')
                    ->icon('heroicon-o-photo')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('image')
                            ->label('Project Image')
                            ->image()
                            ->disk('public')
                            ->directory('projects')
                            ->imageEditor()
                            ->maxSize(5120),
                    ]),
            ]);
    }
}