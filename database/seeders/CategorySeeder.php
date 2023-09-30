<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek =  Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek',
            'content' => 'Erkek Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek Pantalon',
            'content' => 'Erkek Pantalon',
            'cat_ust' => $erkek->id,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek T-Shirt',
            'content' => 'Erkek T-Shirt',
            'cat_ust' => $erkek->id,
            'status' => '1'
        ]);

        $kadın = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın',
            'content' => 'Kadın Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın Pantalon',
            'content' => 'Kadın Pantalon',
            'cat_ust' => $kadın->id,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın T-Shirt',
            'content' => 'Kadın T-Shirt',
            'cat_ust' => $kadın->id,
            'status' => '1'
        ]);

        $cocuk = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk',
            'content' => 'Çocuk Giyim',
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk Pantalon',
            'content' => 'Çocuk Pantalon',
            'cat_ust' => $cocuk->id,
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk T-Shirt',
            'content' => 'Çocuk T-Shirt',
            'cat_ust' => $cocuk->id,
            'status' => '1'
        ]);
    }
}
