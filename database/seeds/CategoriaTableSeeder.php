<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Categoria;



class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = array(
        	[

        		'nome' => 'Super Heroes', 
        		'slug' =>'super heroes',
        		'descricao'=> 'descricao',
        		'color'=>'#440022'
            ],
        	
        	[

        		'nome' => 'Geek', 
        		'slug' =>'geek',
        		'descricao'=> 'descricao',
        		'color'=>'#445500'
            ]

        );

        Categoria::insert($data);
    }
}
