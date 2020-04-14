<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Producto;



class ProductoTableSeeder extends Seeder
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

        		'nome' => 'Playera1', 
        		'slug' =>'playera1',
        		'descricao'=> 'descricao',
        		'extract'=>'Extract',
                'precio'=>275.00,
                'imagem'=>'imagem',
                'visivel'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'categoria_id'=>1
            ],
        	
        [

                'nome' => 'Playera2', 
                'slug' =>'playera2',
                'descricao'=> 'descricao',
                'extract'=>'Extract',
                'precio'=>275.00,
                'imagem'=>'imagem',
                'visivel'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'categoria_id'=>1
            ],
        [

                'nome' => 'Playera3', 
                'slug' =>'playera3',
                'descricao'=> 'descricao',
                'extract'=>'Extract',
                'precio'=>275.00,
                'imagem'=>'imagem',
                'visivel'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'categoria_id'=>2
            ],
        [

                'nome' => 'Playera4', 
                'slug' =>'playera4',
                'descricao'=> 'descricao',
                'extract'=>'Extract',
                'precio'=>275.00,
                'imagem'=>'imagem',
                'visivel'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'categoria_id'=>2
            ],

        );

        Producto::insert($data);
    }
}