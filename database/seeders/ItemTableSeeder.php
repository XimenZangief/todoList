<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['title'=>'牛仔褲','price'=>'500','pic'=>'1.jpg']);
        Item::create(['title'=>'衣服','price'=>'100','pic'=>'1.jpg']);
        Item::create(['title'=>'褲子','price'=>'150','pic'=>'1.jpg']);
        Item::create(['title'=>'內衣','price'=>'300','pic'=>'1.jpg']);
        Item::create(['title'=>'內褲','price'=>'300','pic'=>'1.jpg']);
        Item::create(['title'=>'戒指','price'=>'1200','pic'=>'1.jpg']);
        Item::create(['title'=>'項鍊','price'=>'1100','pic'=>'1.jpg']);
        Item::create(['title'=>'包包','price'=>'1000','pic'=>'1.jpg']);
        Item::create(['title'=>'鞋子','price'=>'600','pic'=>'1.jpg']);
    }
}
