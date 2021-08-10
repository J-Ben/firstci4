<?php

namespace App\Controllers\Ambassadeur;

use App\Controllers\BaseController;

class Shop extends BaseController
{
	public function index()
	{
		echo "<h2>Voici un espace boutique Admin</h2>";
	}

	public function product($type,$product_id)
	{
		echo '<h2>Voici un produit Ambassadeur || Il a un id = '.$product_id .", est de type = ".$type."</h2>";
	}
 
 
}
