<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'Address',
            'data' => 'Ankara / Turkey',
        ]);

        SiteSetting::create([
            'name' => 'Phone',
            'data' => '+90 (555) 555 55 55',
        ]);
        SiteSetting::create([
            'name' => 'E-Mail',
            'data' => 'fakemail@example.com',
        ]);
    }
}
