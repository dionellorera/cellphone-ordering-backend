<?php

	$app->post('/product/list', function ($request, $response, $args) {
		$conditions = array('conditions' => array('available = ?', 1));
		// if ($request->getParsedBody()['manufacturer_id']) {
		// 	$conditions = array('conditions' => array('available = ? and manufacturer_id = ?', 1, $request->getParsedBody()['manufacturer_id']));
		// } 
		$phoneArray = array();
		foreach (Product::all($conditions) as $result) {
			$specs = Specification::find($result->id);
			$res['phone'] = $result->to_array();  
			$res['phone']['manufacturer'] = Manufacturer::find($res['phone']['manufacturer_id'])->to_array()['code'];
			$res['specs'] = $specs->to_array();
			array_push($phoneArray, $res); 
		}
		return json_encode(array('result'=>$phoneArray));
	}); 
