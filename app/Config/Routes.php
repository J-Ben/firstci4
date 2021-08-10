<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/**
 * Creating our own root methode
 * on précise la route/,
 * les paramettres (:any) pour tout type de données,
 * on précise le Controller:: puis la méthode/ et les param $1, $2
 */

 	$routes->add('product/(:any)/(:any)','Shop::product/$1/$2');
 	$routes->add('comment/(:any)/(:any)','Comment::commenter/$1/$2');

/**
 * Groupe d'url / routes
 * Il faut bien préciser le path du repertoire
 */
	$routes->group('admin',function($routes){
		$routes->add('user','Admin\Users::index');
		$routes->add('users','Admin\Users::getAllUsers');
		$routes->add('product/(:any)/(:any)','Admin\Shop::product/$1/$2');

		// Route du blog
		$routes->add('blog','Admin\Blog::index');
		$routes->get('blog/new','Admin\Blog::createNew');
		$routes->post('blog/new','Admin\Blog::saveBlog');

		// Routes article  
		$routes->add('article','Admin\Article::index');
		$routes->get('article/form','Admin\Article::article_form');
		$routes->post('article/new','Admin\Article::new_article');
	});

// Route blog_form

	$routes->add('',''); 

/**
 * Specifique routage
 */



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
