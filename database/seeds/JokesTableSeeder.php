<?php

use Illuminate\Database\Seeder;
use App\Joke;


class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = config('joke-data');

        foreach($jokes as $joke) {

            $new_joke = new Joke();

            $new_joke->title = $joke['title'];
            $new_joke->description = $joke['description'];
            $new_joke->thumb = $joke['thumb'];

            $new_joke->save();
        }
    }
}