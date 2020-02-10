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
            'description' => 'Langage web',
            'src' => 'html.png',
         ],
           [
            'nom' => 'PHP',
            'description' => 'Langage de developpement web',
            'src' => 'php.png',
         ],
           [
            'nom' => 'Java',
            'description' => 'Langage objet',
            'src' => 'java.png',
         ],
         [
            'nom' => 'Python',
            'description' => 'Langage du cobra',
            'src' => 'python.png',
         ]);
         App\Competence::insert($data);
    }
}
