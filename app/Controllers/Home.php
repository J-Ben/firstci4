<?php

namespace App\Controllers;

/**
 * On appelle la classe Admin et Ambassadeur
 */

use App\Controllers\Admin\Shop as AdminShop;
use App\Controllers\Ambassadeur\Shop as AmbassadeurShop;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	function validation()
	{
		/**
		 * From public Shop ctr
		 */
		$shop = new Shop();
		echo $shop->product("Ordi", "411");

		/**
		 * From Admin Shop
		 */

		$adminShop = new adminShop();
		echo $adminShop->product("HP", "hP4410");

		/**
		 *   Frome Ambassadeur Ctrl
		 */

		 $ambashop = new AmbassadeurShop();
		 echo $ambashop->product("80","Mac");
	}
}
