<?php
 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Article extends BaseController
{
    public function index()
    {
       // echo "<h2>La liste des articles</h2>";
       /**
        * Pensez à bien renseigner le chemin relatif si vou avez placé la 
        */
        return view('Article\article_home');
    }

    public function article_form()
    {
        return view('Article\article_form');
    }

    public function new_article()
    {
        echo "<pre>";
        var_dump($_POST);
		print_r($_POST);
		echo "</pre>";
    }
}