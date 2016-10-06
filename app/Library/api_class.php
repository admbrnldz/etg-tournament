<?php
	namespace App\Library;

	class API
	{
		private $ch;
		private $response = false;
		private $url;
		private $options;

		public function __construct()
		{
			$this->url = 'dev.erectusthegame.com/api';
			$this->options = [
				CURLOPT_POSTFIELDS => [
					'apikey' => ''
				]
			];
		}
		
		public function request($request) {
			$this->ch = curl_init($this->url . "/" . $request);

			foreach ($this->options as $key => $val) {
				curl_setopt($this->ch, $key, $val);
			}

			curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
			
			return $this->getResponse();
		}
		
		public function getResponse()
		{
			 if ($this->response) {
				 return $this->response;
			 }

			$response = curl_exec($this->ch);
			$error    = curl_error($this->ch);
			$errno    = curl_errno($this->ch);

			if (is_resource($this->ch)) {
				curl_close($this->ch);
			}

			if (0 !== $errno) {
				throw new \RuntimeException($error, $errno);
			}

			return $this->response = $response;
		}
	}
?>