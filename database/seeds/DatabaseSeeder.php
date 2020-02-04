<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        // $this->call(UsersTableSeeder::class);
        $this->call(CompetencesTableSeeder::class);
        $competences = App\Competence::all();
        factory(App\User::class,50)->create()->each(function($u) use ($competences){
          $compSet = $competences->random(rand(1,4));
          foreach($compSet as $competence) {
            $u->competences()->attach($competence->id,['niveau' => rand(1,5)]);
          }
        });
    }
}