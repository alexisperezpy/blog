<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(15)->create();
        $this->call(PostSeeder::class);
        
    }
}
