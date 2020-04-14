<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        // $this->call(UsersTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
         $this->call(ProductoTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);    // Los usuarios necesitarán los roles previamente generados    

        Model::reguard();
    }
}
