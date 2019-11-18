<?php

use Illuminate\Database\Seeder;

class CoreTestimonialPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug'          => 'chad_dahlstrom',
            'title'         => 'Chad Dahlstrom',
            'content'       => '<p class="quote">“James is an outstanding programmer. He has expert knowledge in his domain and he continuously met deadlines while functioning as a lead programmer on my team.”</p>
                                <div class="name">Chad Dahlstrom</div>
                                <div class="position">Director of Product Development, CD Baby</div>',
            'category'      => 'testimonial',
            'published_at'  => '2019-11-17 00:00:03',
            'is_featured'   => true
        ]);

        DB::table('posts')->insert([
            'slug'          => 'jason_lander',
            'title'         => 'Jason Lander',
            'content'       => '<p class="quote">“James is reliable, dedicated and eternally upbeat. His work ethic and quest to stay at the front edge of development practices is unparalleled. His excellence in these areas served as a model for all of our employees and our company’s reputation as a whole.”</p>
                                <div class="name">Jason Lander</div>
                                <div class="position">Chief Promoter, Staffing Robot</div>',
            'category'      => 'testimonial',
            'published_at'  => '2019-11-17 00:00:02',
            'is_featured'   => true
        ]);

        DB::table('posts')->insert([
            'slug'          => 'robert_krzak',
            'title'         => 'Robert Krzak',
            'content'       => '<p class="quote">“James has always been attentive with our requests for assistance and has provided in depth analysis on the solutions available to fix our problem.”</p>
                                <div class="name">Robert Krzak</div>
                                <div class="position">President, Gecko Hospitality</div>',
            'category'      => 'testimonial',
            'published_at'  => '2019-11-17 00:00:01',
            'is_featured'   => true
        ]);
    }
}
