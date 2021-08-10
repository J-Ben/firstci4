<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
		echo "<h2>Voici le blog</h2>"; 
	}

	public function createNew(){
		 return view('blog_form');
		// echo '<h2>Ceci est la liste des users</h2>';
	}

	public function saveBlog(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
   }

}


