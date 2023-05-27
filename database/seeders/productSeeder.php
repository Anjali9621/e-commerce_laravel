<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
          [  'name'=>'LG Mobile',
          'price'=>'15000',
          'description'=>'Smart Phone With 6GB Ram',
        'category'=>'Electronic',
        'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fsupport%2Fproduct%2Flg-LMX440IM.AINDTNF&psig=AOvVaw0s6oiGhCToZjP6TEBl00tp&ust=1685254451633000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCIjpoeLrlP8CFQAAAAAdAAAAABAO'
        ],
        [  'name'=>'LG TV',
        'price'=>'15000',
        'description'=>'Smart Phone With 6GB Ram',
      'category'=>'Electronic',
      'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fsupport%2Fproduct%2Flg-LMX440IM.AINDTNF&psig=AOvVaw0s6oiGhCToZjP6TEBl00tp&ust=1685254451633000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCIjpoeLrlP8CFQAAAAAdAAAAABAO'
    ],
    [  'name'=>'LG Mobile',
    'price'=>'15000',
    'description'=>'Smart Phone With 6GB Ram',
  'category'=>'Electronic',
  'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fsupport%2Fproduct%2Flg-LMX440IM.AINDTNF&psig=AOvVaw0s6oiGhCToZjP6TEBl00tp&ust=1685254451633000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCIjpoeLrlP8CFQAAAAAdAAAAABAO'
],
[  'name'=>'LG Mobile',
'price'=>'15000',
'description'=>'Smart Phone With 6GB Ram',
'category'=>'Electronic',
'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fsupport%2Fproduct%2Flg-LMX440IM.AINDTNF&psig=AOvVaw0s6oiGhCToZjP6TEBl00tp&ust=1685254451633000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCIjpoeLrlP8CFQAAAAAdAAAAABAO'
]
        ]);
    }
}
