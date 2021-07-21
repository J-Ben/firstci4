<?php

namespace App\Controllers;

/**
 * On appelle la classe Admin
 */
use App\Controllers\Admin\Shop as AdminShop;

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
		echo $shop->product("Ordi","411");

		/**
		 * From Admin Shop
		 */

		 $adminShop = new adminShop();
		 echo $adminShop->product("HP","hP4410");
	}
}