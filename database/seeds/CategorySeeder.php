<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name_en' => 'Digital Cameras',
            'name_id' => 'Kamera Digital'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Sound Device',
            'name_id' => 'Alat Sound'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Televisions',
            'name_id' => 'Televisi'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Computers',
            'name_id' => 'Komputer'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Washing Machines',
            'name_id' => 'Mesin Cuci'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Accessories',
            'name_id' => 'Aksesori'
        ]);
        \App\Models\Category::create([
            'name_en' => 'Mobile Phones',
            'name_id' => 'Telefon'
        ]);
    }
}
