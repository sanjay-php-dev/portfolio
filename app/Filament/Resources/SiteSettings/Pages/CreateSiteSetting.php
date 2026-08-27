<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use App\Models\SiteSetting;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteSetting extends CreateRecord
{
    protected static string $resource = SiteSettingResource::class;

    public function mount(): void
    {
        if (SiteSetting::exists()) {
            $this->redirect(
                SiteSettingResource::getUrl('index')
            );

            return;
        }

        parent::mount();
    }
}