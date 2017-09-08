<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('en_US');
        App\Models\Post::truncate();

    	//foreach (range(1, 60) as $number) {
    	//	App\Models\Post::create([
	    //        'title' => $faker->title . '-' . $faker->name . '#' .$number,
	    //        'author' => $faker->name,
	    //        'content' => $faker->paragraph,
	    //        'is_publish' => rand(0, 1),
        //        'visit_count' => rand(10, 200),
	    //        'comment_count' => rand(1, 20),
        //        'created_at' => Carbon\Carbon::now()->subDays($number),
	    //        'updated_at' => Carbon\Carbon::now()->subDays($number),
	    //    ]);
	    //}

        $content = file_get_contents(base_path().'/README.md');
        App\Models\Post::create([
            'title' => 'laravel blog',
            'author' => 'magiclyde',
            'content' => $content,
            'marked_html'=> markdown_parse($content),
            'is_publish' => 1,
            'visit_count' => 0,
            'comment_count' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
