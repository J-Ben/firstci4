<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
		// echo "<h2>Voici L'espace  UTILISATEUR</h2>";
		return view('user');
		/**
		 * UN test de taille : charger une vue relative à son chemin
		 * return view('Blog\home_blog');
		 */
		

	}

	public function getAllUsers(){
		 return view('users');
		// echo '<h2>Ceci est la liste des users</h2>';
	}
 
 
}


