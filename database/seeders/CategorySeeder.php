<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->name = 'Berita';
        $category->save();

        $category = new Category();
        $category->name = 'Pengumuman';
        $category->save();

        $category = new Category();
        $category->name = 'Acara';
        $category->save();

        $category = new Category();
        $category->name = 'Lowongan Pekerjaan';
        $category->save();

        $category = new Category();
        $category->name = 'Pengadaan Barang dan Jasa';
        $category->save();

        $category = new Category();
        $category->name = 'Pengadaan Tanah';
        $category->save();

        $category = new Category();
        $category->name = 'Pengadaan Gedung';
        $category->save();

        $category = new Category();
        $category->name = 'Polisi';
        $category->save();

        $category = new Category();
        $category->name = 'Pengadaan Kendaraan';
        $category->save();
        

    }
}
