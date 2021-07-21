<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
	}

	public function product($type,$product_id)
	{
		echo '<h2>Voici le produit : '. $type . ' avec un id :' . $product_id. '</h2>';
		//return view('product');
	}
	/**
	 * Méthode non publiques
	 */
	protected function adminCheck()
	{
		echo 'Voici un espace protégé';
	}

 
}
