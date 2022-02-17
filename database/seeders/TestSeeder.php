<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tags')->insert([
            'name_tag' => 'Informática',     
        ]);
        DB::table('tags')->insert([
            'name_tag' => 'Games',     
        ]);
        DB::table('tags')->insert([
            'name_tag' => 'Moda',     
        ]);
        DB::table('tags')->insert([
            'name_tag' => 'Promoção',     
        ]);
        DB::table('tags')->insert([
            'name_tag' => 'Saúde',     
        ]);
        DB::table('tags')->insert([
            'name_tag' => 'Esportes',     
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Mouse',  
            'qtd' => 30,
            'price' => 229.90,
            'visits' => 0
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Teclado',  
            'qtd' => 32,
            'price' => 329.90  , 
            'visits' => 0
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Headset',  
            'qtd' => 14,
            'price' => 429.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Calça',  
            'qtd' => 14,
            'price' => 69.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Blusa',  
            'qtd' => 145,
            'price' => 29.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Meia',  
            'qtd' => 14,
            'price' => 19.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Camisa',  
            'qtd' => 1400,
            'price' => 49.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Sabonete',  
            'qtd' => 5000,
            'price' => 9.90  ,
            'visits' => 0 
        ]);

        
        DB::table('products')->insert([
            'name_prod' => 'Bicicleta',  
            'qtd' => 2,
            'price' => 9999.90  ,
            'visits' => 0 
        ]);

        DB::table('products')->insert([
            'name_prod' => 'Bola',  
            'qtd' => 26,
            'price' => 59.90  ,
            'visits' => 0 
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 1 ,  
         'tag_id' => 1
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 1 ,  
         'tag_id' => 2
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 1 ,  
         'tag_id' => 4
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 2 ,  
         'tag_id' => 1
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 2 ,  
         'tag_id' => 2
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 2 ,  
         'tag_id' => 4
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 3 ,  
         'tag_id' => 1
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 3 ,  
         'tag_id' => 2
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 3 ,  
         'tag_id' => 4
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 4 ,  
         'tag_id' => 3
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 5 ,  
         'tag_id' => 4
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 6 ,  
         'tag_id' => 4
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 7 ,  
         'tag_id' => 4
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 4 ,  
         'tag_id' => 4
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 5 ,  
         'tag_id' => 3
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 8 ,  
         'tag_id' => 5
        ]);

        DB::table('product_tag')->insert([
            'product_id' => 9 ,  
         'tag_id' => 6
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 9 ,  
         'tag_id' => 4
        ]);
        DB::table('product_tag')->insert([
            'product_id' => 10 ,  
         'tag_id' => 4
        ]);
    }
}
