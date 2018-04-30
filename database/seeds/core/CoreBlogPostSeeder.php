<?php

use Illuminate\Database\Seeder;

class CoreBlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug'          => 'experimenting-with-repository-pattern-in-laravel',
            'title'         => 'Experimenting with Respository Pattern in Laravel',
            'content'       => '<p>While working on an application in Laravel recently I noticed that the models had become cluttered with many extra mutators, accessors, and attributes that did not match what was stored in the database. The controllers were also getting messy with lengthy Eloquent method chains for custom queries and conditionals for formatting their results.</p>',
            'category'      => 'blog',
            'image'         => '',
            'link'          => '',
            'published_at'  => '2018-04-18 00:00:00'
        ]);
    }
}
