<?php

/**
 * @author 	  Rogério Albino
 * @link      http://github.com/rogerioalbino/mvc
 * @license   mit
 */

namespace Module\User\src\Controller;

use Elix\Mvc\Controller\Controller;
//use Elix\Mvc\view\AbstractView;

class IndexController extends Controller{
	
	function indexAction()
	{
		$this->setView('index');
		//echo 'metodo retorna true';
	}

	function teste()
	{
		echo 'teste';
	}
    
}