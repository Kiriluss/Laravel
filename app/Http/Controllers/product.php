<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    private $categories;
    public function __construct()
    {
    	$this->categories = [
		1 => [
			'name' => 'Категория 1',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '300',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '400',
					'inStock' => true,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '500',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
		2 => [
			'name' => 'Категория 2',
			'products' => [
				1 => [
					'name'    => 'Продукт 1',
					'cost'    => '700',
					'inStock' => true,
					'desc'    => 'Описание продукта 1'
				],
				2 => [
					'name'    => 'Продукт 2',
					'cost'    => '800',
					'inStock' => false,
					'desc'    => 'Описание продукта 2'
				],
				3 => [
					'name'    => 'Продукт 3',
					'cost'    => '900',
					'inStock' => false,
					'desc'    => 'Описание продукта 3'
				],
			],
		],
	];
	}
	public function howOne($id)
	{
		if ($id>=1 and $id<=2) {
                return view('blad',['post'=>$this->categories[$id],'id'=>$id]);
            }
            else
                return view('aps',['id'=>$id]);
	}
	public function wOne($id, $product_id)
	{
		
		if ($id>=1 and $id<=2) {
                return view('blad2',['basa'=>$this->categories[$id]['products'][$product_id]]);
            }
            else
                return view('aps',['id'=>$id]);
	}

}
