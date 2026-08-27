<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // =====================================================
                // Personal Information
                // =====================================================
                Section::make('Personal Information')
                    ->description('Basic portfolio information.')
                    ->icon('heroicon-o-user')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Name')
                            ->placeholder('-'),

                        TextEntry::make('headline')
                            ->label('Professional Headline')
                            ->placeholder('-'),

                        TextEntry::make('short_bio')
                            ->label('Short Bio')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('about')
                            ->label('About')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // =====================================================
                // Branding & Hero
                // =====================================================
                Section::make('Branding & Hero')
                    ->description('Portfolio logo and Hero section background image.')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        ImageEntry::make('logo')
                            ->label('Logo')
                            ->disk('public')
                            ->height(100)
                            ->placeholder('-'),

                        ImageEntry::make('profile_image')
                            ->label('Hero Background Image')
                            ->disk('public')
                            ->height(180)
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // =====================================================
                // Contact Information
                // =====================================================
                Section::make('Contact Information')
                    ->description('Contact details displayed on the portfolio.')
                    ->icon('heroicon-o-envelope')
                    ->schema([
                        TextEntry::make('email')
                            ->label('Email Address')
                            ->placeholder('-'),

                        TextEntry::make('phone')
                            ->label('Phone')
                            ->placeholder('-'),

                        TextEntry::make('location')
                            ->label('Location')
                            ->placeholder('-'),
                    ])
                    ->columns(3),

                // =====================================================
                // Social Links
                // =====================================================
                Section::make('Social Links')
                    ->description('Professional and social profile links.')
                    ->icon('heroicon-o-share')
                    ->schema([
                        TextEntry::make('github_url')
                            ->label('GitHub')
                            ->placeholder('-')
                            ->url(fn ($record) => $record->github_url, shouldOpenInNewTab: true),

                        TextEntry::make('linkedin_url')
                            ->label('LinkedIn')
                            ->placeholder('-')
                            ->url(fn ($record) => $record->linkedin_url, shouldOpenInNewTab: true),

                        TextEntry::make('facebook_url')
                            ->label('Facebook')
                            ->placeholder('-')
                            ->url(fn ($record) => $record->facebook_url, shouldOpenInNewTab: true),

                        TextEntry::make('instagram_url')
                            ->label('Instagram')
                            ->placeholder('-')
                            ->url(fn ($record) => $record->instagram_url, shouldOpenInNewTab: true),

                        TextEntry::make('twitter_url')
                            ->label('Twitter / X')
                            ->placeholder('-')
                            ->url(fn ($record) => $record->twitter_url, shouldOpenInNewTab: true),
                    ])
                    ->columns(2),

                // =====================================================
                // Timestamps
                // =====================================================
                Section::make('System Information')
                    ->icon('heroicon-o-clock')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Created')
                            ->dateTime()
                            ->placeholder('-'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime()
                            ->placeholder('-'),
                    ])
                    ->columns(2),
            ]);
    }
}