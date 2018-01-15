<?php
	class Comment {
		private $sentences;

		public function __construct($in) {
			$this->sentences = $in;
		}

		public function convertSentences() {
			$this->sentences = preg_replace('/\s+/', '%20', $this->sentences);
		}

		public function getSentences() {
			return $this->sentences;
		}
	}
?>