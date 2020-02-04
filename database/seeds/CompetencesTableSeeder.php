<?php

use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array([
            'nom' => 'Javascript',
            'description' => 'Langage de script',
            'src' => 'js.png',
        ],
        [
            'nom' => 'HTML/CSS',
            'description' => 'coucou',
            'src' => 'html.png',
         ],
           [
            'nom' => 'PHP',
            'description' => 'coucou1',
            'src' => 'php.png',
         ],
           [
            'nom' => 'Java',
            'description' => 'hello',
            'src' => 'java.png',
         ]);
         App\Competence::insert($data);
    }
}
