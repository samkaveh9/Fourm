<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ReplySeeder;
use Database\Seeders\ThreadSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //
        $this->call([
          Channel::class,
          UserSeeder::class,
          ThreadSeeder::class,
          ReplySeeder::class,
        ]);
    }
}
