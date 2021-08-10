<?php

namespace App\Controllers;

class Comment extends BaseController
{
	public function index()
	{
		return view('comment');
		/**
		 *  on peut charger plusieurs vues
		 * echo  view('welcome_message');
		 */
		
	}

	public function commenter($comment ='Ceci est un commentaire ',$auteur='ANOUCHKA')
	{
		echo '<h2>Comment : '. $comment . ' avec un Auteur :' . $auteur. '</h2>';
		//return view('product');
	}
	/**
	 * Méthode non publique
	 */
	protected function adminCheck()
	{
		echo 'Voici un espace protégé';
	}

 
}
