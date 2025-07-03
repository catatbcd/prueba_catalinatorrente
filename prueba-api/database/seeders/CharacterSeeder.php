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
        //
        $charactersFetched=0;
        $page=1;
        while($charactersFetched<=10){
             $response = Http::get("https://rickandmortyapi.com/api/character?page={$page}");
             if($response->successful()){
                $data=$response->json();

                foreach ($data['results'] as $character ){
                    if (charactersFetchet>10) break;

                    DB::table('characters')-insert([
                        'name'=> $character['name'],
                        'status'=> $character['status'],
                        'species'=> $character['species'],
                        'type'=> $character['type'],
                        'gender'=> $character['gender'],
                        'origin'=> $character['origin']['name'],
                        'location'=> $character['location']['name'],
                        'image'=> $character['image'],
                        'episode'=> json_encode($character['episode']),
                        'url'=> $character['url'],
                        'created'=> Carbon::parse($character['created']),
                    ]);
                }
                $charactersFetched++;
             }
                $page++;
            } else {
                $this->command->error('Error al obtener datos de la API');
                break;
            }
        }     
           
    }
}
