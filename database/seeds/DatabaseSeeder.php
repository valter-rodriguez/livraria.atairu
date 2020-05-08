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
        $this->call(ProdutoCategoriaTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        $this->call(CarrinhoSeeder::class);
        $this->call(PedidosSeeder::class);
    }
}
