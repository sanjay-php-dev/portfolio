<?php

namespace App\Filament\Resources\Projects\Tables;

use App\Models\Skill;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('technologies')
                    ->label('Technologies')
                    ->getStateUsing(function ($record): string {
                        $skillIds = $record->technologies;

                        if (! is_array($skillIds) || empty($skillIds)) {
                            return '-';
                        }

                        return Skill::query()
                            ->whereIn('id', $skillIds)
                            ->orderBy('sort_order')
                            ->orderBy('name')
                            ->pluck('name')
                            ->implode(', ');
                    })
                    ->wrap(),

                TextColumn::make('project_url')
                    ->label('Project URL')
                    ->limit(35)
                    ->url(fn ($record) => $record->project_url)
                    ->openUrlInNewTab()
                    ->toggleable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}