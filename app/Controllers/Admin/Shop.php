<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
	public function index()
	{
		echo "<h2>Voici un espace boutique Admin</h2>";
	}

	public function product($type,$product_id)
	{
		echo '<h2>Voici un produit Admin</h2>';
	}
 
 
}
