<?php

namespace App\Controllers;

/**
 * On appelle la classe Admin et Ambassadeur
 */

use App\Controllers\Admin\Shop as AdminShop; 

class Blog extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('blog');
		echo view('footer');
	}

	public function post()
	{
		echo view('header');
		echo view('single_post');
		echo view('footer');
	}

	public function essai()
	{
		echo "<h1>Youpiiii</h1>";
	}
	

}
