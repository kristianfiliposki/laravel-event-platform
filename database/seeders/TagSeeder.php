<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tags = [
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],
            [
                'type' => 'economy',
            ],

        ];

        foreach ($tags as $tag) {
            $newTags=new tag;
            $newTags->type=$tag['type'];
            $newTags->save();
        }

    }
}
