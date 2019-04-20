<?php

use Illuminate\Database\Seeder;

class CoreWorkPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug'          => 'discogs',
            'title'         => 'Discogs',
            'subtitle'      => 'Lead Software Engineer, August 2018 to Present',
            'content'       => '<p>Discogs is on a mission to build the world\'s biggest and most comprehensive music database. With a connected marketplace, forums, and other community-driven resources Discogs brings people together to share their love of music with the world.</p><p>Discogs brought me on initially to help with the creation of new microservices to modernize and expand the functionality of their marketplace services. Using Laravel in a Docker environment I built a direct messaging service to improve communication options to marketplace contributors.</p><p>After this I joined a team working on API enhancements. Together we are working to improve the flexibility of the Discogs API to better support both internal and third-party services that communicate with our extensive music database and marketplace.</p>',
            'category'      => 'work',
            'image'         => 'work-discogs-logo.png',
            'link'          => '',
            'published_at'  => '2018-04-20 00:00:00',
            'is_featured'   => true
        ]);

        DB::table('posts')->insert([
            'slug'          => 'optinmonster',
            'title'         => 'OptinMonster',
            'subtitle'      => 'Senior Software Engineer, April 2017 to August 2018',
            'content'       => '<p>OptinMonster provides a powerful toolkit for converting website visitors into subscribers. The platform is highly customizable and can integrate with dozens of mailing list providers and analytics services to fit a customer\'s particular marketing requirements.</p> <p>I was brought on to the team at OptinMonster to both assist with implementing new features as well as provide support to current customers. The coding was done primarily in a highly customized WordPress setup with a few frameworks mixed in. One of the unique challenges with this project was to integrate with APIs of nearly every marketing platform available such as MailChimp, AWeber, and Google Analytics.</p> <p>We soon began work revamping the UI in order to add drag-and-drop functionality and other modern features. This effort grew in scope until it effected all aspects of the code and became a new version of the application. My contributions included redesigning the databse to accommodate new data structures and utilizing Laravel\'s Eloquent ORM to facilitate communication between the presentation and data layers.</p>',
            'category'      => 'work',
            'image'         => 'work-optinmonster-logo-alt.png',
            'link'          => '',
            'published_at'  => '2018-04-19 00:00:00',
            'is_featured'   => true
        ]);

        DB::table('posts')->insert([
            'slug'          => 'gecko-hospitality',
            'title'         => 'Gecko Hospitality',
            'subtitle'      => 'Freelance Web Developer, March 2015 to April 2017',
            'content'       => '<p>Gecko Hospitality offers job recruiting services for the restaurant, hotel, and resort industries. Through job boards, marketing, and consulting services Gecko offers their clients customized services so as to find the best candidates to join their teams.</p><p>I first assisted Gecko Hospitality by integrating a job board into their existing website. This service required a custom WordPress plugin to connect the job board with hospitality-related job listings. After this I continued to provide support for the job board as well as continuous improvements to their website. When Gecko expanded their services to other countries I assisted with adding internationalization improvements.</p>',
            'category'      => 'work',
            'image'         => 'work-geckohospitality-logo3.png',
            'link'          => '',
            'published_at'  => '2018-04-18 00:00:00',
            'is_featured'   => false
        ]);

/*
        DB::table('posts')->insert([
            'slug'          => 'johnstone-supply',
            'title'         => 'Johnstone Supply',
            'subtitle'      => 'March 2015 - April 2017',
            'content'       => '<p>Johnstone Supply is a nationwide provider of parts and equipment for HVACR (Heating Ventilation Air Conditioning and Refrigeration) contractors. They offer a specialized application to allow contractors to order parts and manage their inventories easily from anywhere in the country.</p><p>While contracting with Staffing Robot I was tasked with rebuilding Johnstone\'s homespun part ordering app from the ground up. The first phase of this project involved recreating all existing functionality in a new Laravel application. Phase two involved enhancing the interface and database to better handle a growing network of contractors and suppliers.</p><p>After Staffing Robot stopped supporting clients I continued working directly with Johnstone Supply to make further improvements and fixes to the application. After all project requirements were met I provided support to their internal development team to take over management of the application.</p>',
            'category'      => 'work',
            'image'         => 'work-johnstone-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-17 00:00:00',
            'is_featured'   => false
        ]);
*/
/*
        DB::table('posts')->insert([
            'slug'          => 'staffing-robot',
            'title'         => 'Staffing Robot',
            'subtitle'      => 'March 2015 - December 2016',
            'content'       => '<p>Staffing Robot was a design, development and marketing agency specializing in full-service solutions for healthcare staffing companies. Their clients were provided with targeted branding, a bespoke WordPress website, and a detailed marketing plan. Also included was a custom job board plugin called Jobbee.</p><p>Initially I was brought on board to develop an application for Johnstone Supply, one of Staffing Robot\'s few non-healthcare clients. After successfully developing this project through its first phase I then took on more work for other clients including Advanced Medical, MightyNurse, and Gecko Hospitality. This work involved WordPress development plus communicating with the APIs of different job boards and applicant tracking systems.</p><p>Advanced eventually purchased Staffing Robot and subsequently shut down all client-based work. Many of these companies did not have web developers on their staff and I contracted with some of them to continue supporting their websites, job boards, and hosting services.</p>',
            'category'      => 'work',
            'image'         => 'work-staffingrobot-logo.png',
            'link'          => '',
            'published_at'  => '2018-04-16 00:00:00',
            'is_featured'   => true
        ]);
*/

        DB::table('posts')->insert([
            'slug'          => 'hubspot',
            'title'         => 'HubSpot',
            'subtitle'      => 'Freelance Web Developer, February 2015 to April 2017',
            'content'       => '<p>HubSpot is an inbound marketing service designed to help attract website visitors and convert them to loyal customers. Their services allow website experiences to be tailored to the preferences of each visitor which creates an unobtrusive marketing experience.</p><p>HubSpot needed help creating a reporting tool for some of their clients who wanted automatic real-time data for certain scenarios. I used the Laravel PHP framework to create a lightweight event listening service that constantly monitored updates to their database and sent out notifications based on specific criteria. The service also generated graphical and tabular report files for reference purposes.</p>',
            'category'      => 'work',
            'image'         => 'work-hubspot-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-15 00:00:00',
            'is_featured'   => false
        ]);

        DB::table('posts')->insert([
            'slug'          => 'shiftwise',
            'title'         => 'Shiftwise',
            'subtitle'      => 'Freelance Web Developer, June 2013 to December 2016',
            'content'       => '<p>Shiftwise provides comprehensive workforce management solutions to help medical institutions manage their staffing requirements. These tools help health facilities maintain proper staffing levels and training certifications to ensure high quality patient care.</p><p>I helped Shiftwise by building and supporting their Mighty Nurse website. This service helps nurses find positions at top medical facilities while providing a community for sharing industry news and training resources. The site was built in WordPress with custom plugins for quizzes and job board services. In addition I managed their Google Analytics account and generated reports for them on site participation and test results.</p>',
            'category'      => 'work',
            'image'         => 'work-shiftwise-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-14 00:00:00',
            'is_featured'   => false
        ]);

        DB::table('posts')->insert([
            'slug'          => 'leupold',
            'title'         => 'Leupold',
            'subtitle'      => 'Freelance Web Developer, May 2012 to January 2015',
            'content'       => '<p>Leupold is a leading creator of world-class optics for hunters and military personnel. Their scopes, sights, and binoculars are waterproof, fogproof, and built to last a lifetime of active use. They also offer custom finishes and laser engraving so that their products can be personalized to the needs of their customers.</p><p>I handled making all updates to Leupold\'s WordPress website including feature implementation, design changes, content edits, and bug fixes. I was also responsible for keeping WordPress and all installed plugins updated and ensuring compatibility with all custom code and third-party integrations.</p>',
            'category'      => 'work',
            'image'         => 'work-leupold-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-13 00:00:00',
            'is_featured'   => false
        ]);

        DB::table('posts')->insert([
            'slug'          => 'travel-oregon',
            'title'         => 'Travel Oregon',
            'subtitle'      => 'Freelance Web Developer, May 2012 to September 2014',
            'content'       => '<p>Travel Oregon is the business side of the Oregon Tourism Commission which itself is a state government agency created to enhance Oregon\'s $11 billion-plus tourism industry. Their services include advertising, public relations, and tourism product development.</p><p>My role with Travel Oregon was to maintain their WordPress website. Various initiatives on their part required custom coding to implement new functionality on their site. Frequently these would involve communicating with the Google Maps API and processing of geolocation data. Also, as part of their advertising and marketing efforts frequent updates were made to the content of the site which required design changes and UI development.</p>',
            'category'      => 'work',
            'image'         => 'work-traveloregon-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-12 00:00:00',
            'is_featured'   => false
        ]);

        DB::table('posts')->insert([
            'slug'          => 'cd-baby',
            'title'         => 'CD Baby',
            'subtitle'      => 'Lead Web Developer, May 2008 to May 2012',
            'content'       => '<p>CD Baby is an online music store specializing in helping independent musicians sell their CDs, records, and digital downloads to their fans. They provide resources including online storefronts, personalized websites, marketing tools, and promotional materials.</p><p>During my time at Host Baby, CD Baby\'s web hosting division, I worked my way up from Junior Web Developer to Lead Web Developer. Our focus was on developing tools for musicians to create their own promotional websites without the need for technical skills. My team utilized modern practices and tools including the CodeIgniter and Zend PHP frameworks.</p>',
            'category'      => 'work',
            'image'         => 'work-cdbaby-logo2.png',
            'link'          => '',
            'published_at'  => '2018-04-11 00:00:00',
            'is_featured'   => true
        ]);

/*
        DB::table('posts')->insert([
            'slug'          => 'hot-off-the-press',
            'title'         => 'Hot Off The Press',
            'subtitle'      => 'April 2005 - May 2008',
            'content'       => '<p>Hot Off The Press provides top-quality scrapbooking supplies to retailers, dealers, and professional crafters worldwide. Their papers, stamps, embellishments, books, tools, and other supplies are distributed through retail partners, catalog ordering, and online sales.</p><p>My first real programming job involved me creating and maintaining an internal application for managing the company\'s catalog sales and distribution. This application stored sales data in a database and generated reports from it for accounting purposes. It also generated email notifications to company managers with details like product quantities and sales questions.</p>',
            'category'      => 'work',
            'image'         => 'work-hotp-logo.png',
            'link'          => '',
            'published_at'  => '2018-04-10 00:00:00',
            'is_featured'   => false
        ]);
*/
    }
}
