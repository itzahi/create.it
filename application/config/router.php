<?php
	
	$route['createit'] = array(
		'uri'			=>	'',
		'controller'	=>	'createit', // Or any other controller
		'method'		=>	'home', // Or any class method, be sure to use public class
	);
	
	$route['nameYourRoute'] = array(
		'uri'			=>	':action', // type action for getting it from the uri and using privat class in your controller.
		'controller'	=>	'createit',
		'method'		=>	'home', // Set the method you want home to generate.
	);