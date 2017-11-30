<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TheloaiTableSeeder::class);
        $this->call(LoaitinTableSeeder::class);
        $this->call(TintucTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
