<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Fecades\Http;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')-insert([
            'name'=>'rick',
            'status'=> 'alive',
            'species'=> 'human',
            'type'=> '',
            'gender'=> 'male',
            'origin'=> 'earth',
            'location'=> 'earth',
            'image'=> '',
            'episode'=> '',
            'url'=> '',
            'created'=> Carbon::now(),
        ]);
    }
}
