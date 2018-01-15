<?php
	class JSONParser {
		private $time;
		private $sentiment_type;
		private $sentiment_score;
		private $timestamp;

		public function __construct($json) {
			$parsed = json_decode($json);
			$this->time = $parsed->time;
			$this->sentiment_type = $parsed->sentiment->type;
			$this->sentiment_score = $parsed->sentiment->score;
			$this->timestamp = $parsed->timestamp;
		}

		public function getTime() {
			return $this->time;
		}

		public function getType() {
			return $this->sentiment_type;
		}

		public function getScore() {
			return $this->sentiment_score;
		}

		public function getTimestamp() {
			return $this->timestamp;
		}
	}
?>