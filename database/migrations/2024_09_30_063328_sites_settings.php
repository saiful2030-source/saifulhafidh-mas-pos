<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class SitesSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('sites.site_name', env('APP_NAME'));
        $this->migrator->add('sites.site_description', 'Lorem Ipsum dolor sit amet');
        $this->migrator->add('sites.site_keywords', 'Test');
        $this->migrator->add('sites.site_profile', '');
        $this->migrator->add('sites.site_logo', '');
        $this->migrator->add('sites.site_author', 'Test');
        $this->migrator->add('sites.site_address', 'Indonesia');
        $this->migrator->add('sites.site_email', 'info@info.com');
        $this->migrator->add('sites.site_phone', '+628139123');
        $this->migrator->add('sites.site_phone_code', '+62');
        $this->migrator->add('sites.site_location', 'Indonesia');
        $this->migrator->add('sites.site_currency', 'Rupiah');
        $this->migrator->add('sites.site_language', 'Indonesia');
        $this->migrator->add('sites.site_social', []);
    }
}
