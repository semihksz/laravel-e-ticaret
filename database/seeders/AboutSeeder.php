<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'blog_1.jpg',
            'title' => 'Hakkımda',
            'content' => 'Bu mağaza 2023 yılında hayallerini gerçeğe dönüştürme amacıyla yolu çıkmış bir girişimcinin eseridir.',
            'personImage' => 'person_1.jpg',
            'personName' => 'Semih Öksüz',
            'personPosition' => 'CEO/CO-FOUNDER',
            'personDescription' => 'Bu mağazanın kurusu ve Ceo\'su.',
            'textTitle1' => 'FREE SHIPPING',
            'textTitle2' => 'FREE RETURNS',
            'textTitle3' => 'CUSTOMER SUPPORT',
            'textDescription1' => 'Free shipping is available for all our products.',
            'textDescription2' => 'You have up to 7 days free return right.',
            'textDescription3' => '24/7 Customer support is available.',
            'textIcon1' => 'icon-truck',
            'textIcon2' => 'icon-refresh2',
            'textIcon3' => 'icon-help',
            'status' => '1',

        ]);
    }
}
