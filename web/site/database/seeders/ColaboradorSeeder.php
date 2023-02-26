<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    /* no codigo abaixo eu criei um usuario no banco de dados é no arqui.
      DatabasesSeeder eu chamei esse usuario para que fosse criado */
    User::create(['name'=>'Alencar','email'=>'alencar@gmail.com','password'=>bcrypt('123456')]);
    }
}
