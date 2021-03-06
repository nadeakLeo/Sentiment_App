<?php
	function call($controller, $action) {
		require_once('controller/'.$controller.'_controller.php');

		switch ($controller) {
			case 'pages':
				$controller = new PagesController();
				break;
		}
		$controller->{ $action }();
	}

	$controllers = array('pages' => ['home', 'page_notfound', 'show']);
	//Check controller that called exist
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'page_notfound');
		}
	} else {
		call('pages', 'page_notfound');
	}
	
?>