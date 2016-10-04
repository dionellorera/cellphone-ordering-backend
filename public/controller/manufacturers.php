<?php

	$app->get('/manufacturer/list', function ($request, $response, $args) {  
		foreach (Manufacturer::all() as $result) { 
			$res[] = $result->to_array();  
		}
		echo json_encode(array('result'=>$res));
	});

