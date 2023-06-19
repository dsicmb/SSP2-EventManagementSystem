<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event_categories = array(
            array(
                'name' => 'Music Concerts',
                'description' => 'Live performances by popular musicians and bands'
            ),
            array(
                'name' => 'Art Exhibitions',
                'description' => 'Display of various forms of visual arts'
            ),
            array(
                'name' => 'Sports Tournaments',
                'description' => 'Competitive matches and games in different sports'
            ),
            array(
                'name' => 'Film Festivals',
                'description' => 'Screenings of movies from different genres'
            ),
            array(
                'name' => 'Food Festivals',
                'description' => 'Celebration of culinary delights and flavors'
            ),
            array(
                'name' => 'Technology Conferences',
                'description' => 'Gatherings to explore advancements in technology'
            ),
            array(
                'name' => 'Fashion Shows',
                'description' => 'Presentations of latest fashion trends and designs'
            ),
            array(
                'name' => 'Charity Events',
                'description' => 'Fundraising activities for noble causes'
            ),
            array(
                'name' => 'Workshops and Seminars',
                'description' => 'Educational sessions to learn new skills and knowledge'
            ),
            array(
                'name' => 'Comedy Shows',
                'description' => 'Performances by stand-up comedians for laughter and amusement'
            )
        );

        foreach($event_categories as $event_category){
            \App\Models\Category::create($event_category);
        }
    }
}
