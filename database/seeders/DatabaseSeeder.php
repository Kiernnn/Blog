<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Comment::factory(40)->create();
        \App\Models\Article::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Kiern',
            'email' => 'kiern@gmail.com',
        ]);

        $list = ['News', 'Tech', 'Mobile', 'Web', 'OSS'];
        foreach($list as $name) {
            \App\Models\Category::create(['name'=> $name]);
        }
    }
}
