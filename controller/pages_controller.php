<?php
	require_once('analyzer.php');
	require_once('json_parser.php');
	class PagesController {
		public function home() {
			require_once('view/pages/home.php');
		}

		public function error() {
			require_once('view/pages/error.php');
		}

		public function show() {
			//showing Sentiment Analytics Result
			$input = $_POST['comment'];
			$analyzer = new Analyzer($input);
			$result = new JSONParser($analyzer->getResponse());

			require_once('view/pages/analytics_result.php');
		}
	}
?>