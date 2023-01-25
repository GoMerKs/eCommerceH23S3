<?php

class App{

	function __construct(){
		//this is where we want to route the requests to the appropriate classes/methods

		echo $_GET['url'] ?? 'No url provided';

		$request = $this->parseUrl($_GET['url']);

		var_dump($request);
	}

	function parseUrl($url){
		return explode('/', $url);
	}


}