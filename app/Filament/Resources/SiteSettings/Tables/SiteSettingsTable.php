<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('headline')
                    ->label('Headline')
                    ->searchable()
                    ->limit(40),

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->square(),

                ImageColumn::make('profile_image')
                    ->label('Hero Background')
                    ->disk('public')
                    ->square(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('location')
                    ->label('Location')
                    ->searchable(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}