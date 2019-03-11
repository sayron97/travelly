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
        $this->call(ImagesConnectionSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TagsConnectionSeeder::class);
        $this->call(TagsSeeder::class);
    }
}
