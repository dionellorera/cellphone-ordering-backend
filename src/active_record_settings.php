<?php
	ActiveRecord\Config::initialize(function($cfg){
	   $cfg->set_model_directory(__DIR__ . '/../public/model');
	   $cfg->set_connections(array('development' =>
	     'mysql://root:@localhost/cellphone_ordering'));
	});
