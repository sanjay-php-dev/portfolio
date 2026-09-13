<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // =====================================================
                // Personal Information
                // =====================================================
                Section::make('Personal Information')
                    ->description('Basic information displayed throughout your portfolio.')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Your full name'),

                        TextInput::make('headline')
                            ->label('Professional Headline')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('PHP & Laravel Developer | React Native Developer'),

                        Textarea::make('short_bio')
                            ->label('Short Bio')
                            ->rows(4)
                            ->maxLength(1000)
                            ->placeholder('A short introduction about yourself.')
                            ->columnSpanFull(),

                        Textarea::make('about')
                            ->label('About')
                            ->rows(8)
                            ->maxLength(5000)
                            ->placeholder('Detailed information about your professional background and experience.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // =====================================================
                // Branding & Hero
                // =====================================================
                Section::make('Branding & Hero')
                    ->description('Manage your portfolio logo and Hero section background image.')
                    ->icon('heroicon-o-photo')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('site-settings/logo')
                            ->imageEditor()
                            ->imagePreviewHeight('120')
                            ->maxSize(2048)
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                                'image/svg+xml',
                            ])
                            ->helperText('Upload your portfolio logo. Recommended: PNG or SVG.'),

                        FileUpload::make('profile_image')
                            ->label('Hero Background Image')
                            ->image()
                            ->disk('public')
                            ->directory('site-settings/hero')
                            ->imageEditor()
                            ->imagePreviewHeight('180')
                            ->maxSize(5120)
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->helperText('This image is used as the background image of the Hero section.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // =====================================================
                // Contact Information
                // =====================================================
                Section::make('Contact Information')
                    ->description('Contact details displayed in the portfolio.')
                    ->icon('heroicon-o-envelope')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('your@email.com'),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->maxLength(50)
                            ->placeholder('+91 98765 43210'),

                        TextInput::make('location')
                            ->label('Location')
                            ->maxLength(255)
                            ->placeholder('Ahmedabad, Gujarat, India'),
                    ])
                    ->columns(3),

                // =====================================================
                // Social Links
                // =====================================================
                Section::make('Social Links')
                    ->description('Add links to your professional and social profiles.')
                    ->icon('heroicon-o-share')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('github_url')
                            ->label('GitHub')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://github.com/username'),

                        TextInput::make('linkedin_url')
                            ->label('LinkedIn')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://www.linkedin.com/in/username'),

                        TextInput::make('facebook_url')
                            ->label('Facebook')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://www.facebook.com/username'),

                        TextInput::make('instagram_url')
                            ->label('Instagram')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://www.instagram.com/username'),

                        TextInput::make('twitter_url')
                            ->label('Twitter / X')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://x.com/username'),
                    ])
                    ->columns(2),
            ]);
    }
}