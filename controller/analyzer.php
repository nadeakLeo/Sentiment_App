<?php
	require_once('model/comment.php');

	class Analyzer {
		private $response;
		public function __construct($in) {
			$comment = new Comment($in);
			$comment->convertSentences();

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'https://api.dandelion.eu/datatxt/sent/v1/?lang=en&text='.$comment->getSentences().'&token=0f7b1fadfe7a471ea2767dbac54a2d22',

			));

			$this->response = curl_exec($curl);

			curl_close($curl);
		}

		public function getResponse() {
			return $this->response;
		}
	}
?>