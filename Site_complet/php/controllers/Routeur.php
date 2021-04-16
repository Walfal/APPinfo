<?php
class Router
{
	private $_ctrl
	private $_view

	public function routreReq()
	{
		try{
			// chargement automatique des classes
				spl_autoload_register(function($class){
					require_once('models/'.$class'.php')
				});

				$url ='';

				if(isset($_Get['url']))
				{
					$url = explode()
				}
		}
		catch(Exception $e)
		{

		}
	}
}