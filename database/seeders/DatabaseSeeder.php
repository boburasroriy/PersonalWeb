<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory()->count(10)->create();
        Project::factory()->count(5)->create();
        User::factory()->count(5)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

    }
}
