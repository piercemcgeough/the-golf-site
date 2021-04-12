<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Club::factory()
            ->count(100)
            ->create()
            ->each(function ($club) {
                \App\Models\Member::factory([
                    'club_id' => $club->id
                ])
                ->count(rand(50, 100))
                ->create();
            });
    }
}
