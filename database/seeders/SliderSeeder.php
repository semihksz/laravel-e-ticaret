<?php

namespace Database\Seeders;

use App\Models\Slider;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'hero_1.jpg',
            'name' => 'Slider 1',
            'content' => 'E Ticaret Sitemize Hoşgeldiniz',
            'link' => 'product',
            'status' => '1'
        ]);
    }
}
