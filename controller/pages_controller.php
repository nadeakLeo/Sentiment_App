<?php
	require_once('analyzer.php');
	require_once('json_parser.php');
	class PagesController {
		public function home() {
			require_once('view/pages/home.php');
		}

		public function page_notfound() {
			$error = "The Page You Access Can Not Be Found";
			require_once('view/pages/error.php');
		}

		public function show() {
			//showing Sentiment Analytics Result
			$input = $_POST['comment'];
			$analyzer = new Analyzer($input);
			if ($analyzer->getError() !== null) {
				$error = $analyzer->getError();
				require_once('view/pages/error.php');
			} else {
				$result = new JSONParser($analyzer->getResponse());

				require_once('view/pages/analytics_result.php');
			}
		}
	}
?>