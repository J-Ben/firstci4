<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
		/**
		 *  on peut charger plusieurs vues
		 * echo  view('welcome_message');
		 */
		
	}

	public function product($type ='Laptop',$product_id='Dell')
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
