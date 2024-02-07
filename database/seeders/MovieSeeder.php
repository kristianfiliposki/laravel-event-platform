<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies=[
            [
                'name' => 'countries',
                'cast' => 'countries',
                'language' => 'countries',
                'oscar' => '1',

            ],
            [
                'name' => 'countries',
                'cast' => 'countries',
                'language' => 'countries',
                'oscar' => '1',

            ],
            [
                'name' => 'countries',
                'cast' => 'countries',
                'language' => 'countries',
                'oscar' => '1',

            ],
            [
                'name' => 'countries',
                'cast' => 'countries',
                'language' => 'countries',
                'oscar' => '1',

            ],


        ];

        foreach ($movies as $movie) {
            $newmovie= new Movie;
            $newmovie->name=$movie['name'];
            $newmovie->cast=$movie['cast'];
            $newmovie->language=$movie['language'];
            $newmovie->oscar=$movie['oscar'];
            $newmovie->save();
        }
    }
}
