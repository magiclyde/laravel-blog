<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('en_US');
        App\Models\Tag::truncate();
    	foreach (range(1, 5) as $number) {
    		App\Models\Tag::create([
	            'title' => $faker->name,
                'created_at' => Carbon\Carbon::now()->addDays($number),
	            'updated_at' => Carbon\Carbon::now()->addDays($number),
	        ]);
	    }
    }
}
