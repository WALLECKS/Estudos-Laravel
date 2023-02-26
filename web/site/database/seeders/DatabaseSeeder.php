<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ProductModel;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {// No codigo abaixo foi criado 10 usuarios no banco de dados
        //\App\Models\User::factory(10)->create();


//no codigo abaixo eu chamei a classe ProductModelSeeder para que fosse criado varios usuarios no banco de dados
       $this->call(ProductModelSeeder::class);

        // no codigo abaixo eu chamei minha model para criar 20 usuariso no banco de dados
      //\App\Models\ProductModel::factory(20)->create();
    }
}
