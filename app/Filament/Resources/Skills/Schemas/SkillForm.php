<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Skill Information')
                    ->description(
                        'Define the skill and how it should appear on your portfolio.'
                    )
                    ->icon('heroicon-o-code-bracket')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Skill Name')
                            ->placeholder('e.g. Laravel')
                            ->required()
                            ->maxLength(255),

                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'Backend' => 'Backend',
                                'Frontend' => 'Frontend',
                                'CMS' => 'CMS',
                                'Database' => 'Database',
                                'APIs & Integration' => 'API & Integration',
                                'Version Control' => 'Version Control',
                                'Hosting & Deployment' => 'Hosting & Deployment',
                                'Testing & Documentation' => 'Testing & Documentation',
                            ])
                            ->placeholder('Select a category')
                            ->required(),

                        TextInput::make('proficiency')
                            ->label('Proficiency (%)')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->default(80)
                            ->suffix('%')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->minValue(0)
                            ->default(0)
                            ->required()
                            ->helperText('Lower numbers appear first.'),
                    ])
                    ->columns(2),

                Section::make('Publishing')
                    ->description(
                        'Control whether this skill is visible on your public portfolio.'
                    )
                    ->icon('heroicon-o-eye')
                    ->columnSpanFull()
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Enable this skill to display it on your portfolio.')
                            ->default(true),
                    ]),
            ]);
    }
}