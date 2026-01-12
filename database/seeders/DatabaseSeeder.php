<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Agenda;
use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\News;
use App\Models\SchoolUnit;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        $user = User::factory()->create([
            'name' => 'Admin Sekolah',
            'email' => 'admin@sekolahnusantara.sch.id',
            'password' => bcrypt('password'),
        ]);

        // 2. Settings
        Setting::create(['key' => 'school_name', 'value' => 'Sekolah Nusantara']);
        Setting::create(['key' => 'school_address', 'value' => 'Jl. Pendidikan No. 123, Indonesia']);
        Setting::create(['key' => 'school_phone', 'value' => '(021) 12345678']);
        Setting::create(['key' => 'school_email', 'value' => 'info@sekolahnusantara.sch.id']);
        Setting::create(['key' => 'history', 'value' => 'Sekolah Nusantara didirikan pada tahun 1990...']);
        Setting::create(['key' => 'vision', 'value' => 'Menjadi sekolah unggulan...']);
        Setting::create(['key' => 'mission', 'value' => '1. Mendidik siswa...']);
        Setting::create(['key' => 'structure_image_url', 'value' => 'https://placehold.co/1200x800?text=Struktur+Organisasi']);

        // 3. School Units
        $units = [
            ['name' => 'SD Nusantara', 'slug' => 'sd-nusantara', 'image_url' => 'https://placehold.co/600x400?text=SD+Nusantara'],
            ['name' => 'SMP Nusantara', 'slug' => 'smp-nusantara', 'image_url' => 'https://placehold.co/600x400?text=SMP+Nusantara'],
            ['name' => 'SMA Nusantara', 'slug' => 'sma-nusantara', 'image_url' => 'https://placehold.co/600x400?text=SMA+Nusantara'],
        ];

        foreach ($units as $unitData) {
            $unit = SchoolUnit::create($unitData);
            
            // Teachers for each unit
            Teacher::factory()->count(10)->create([
                'school_unit_id' => $unit->id,
            ]);

            // Headmaster (Structural)
            Teacher::factory()->create([
                'school_unit_id' => $unit->id,
                'position' => 'Kepala Sekolah',
                'is_structural' => true,
                'order' => 1,
            ]);
        }

        // 4. Extracurriculars
        Extracurricular::factory()->count(6)->create();

        // 5. News & Agendas
        News::factory()->count(10)->create(['user_id' => $user->id]);
        Agenda::factory()->count(5)->create(['user_id' => $user->id]);

        // 6. Galleries
        $galleries = Gallery::factory()->count(5)->create(['user_id' => $user->id]);
        foreach ($galleries as $gallery) {
            GalleryItem::factory()->count(6)->create(['gallery_id' => $gallery->id]);
        }

        // 7. Achievements
        Achievement::factory()->count(8)->create();
    }
}
