<?php

use Illuminate\Database\Seeder;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with core data.
     *
     * @return void
     */
    public function run()
    {
        // Core seeders to run
        $this->call(CoreBlogPostSeeder::class);
        $this->call(CoreWorkPostSeeder::class);
        $this->call(CoreProjectPostSeeder::class);
        $this->call(CoreTestimonialPostSeeder::class);
    }
}
