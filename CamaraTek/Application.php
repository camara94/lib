<?php
	
	namespace CamaraTek;
	/**
	 * 
	 */
	abstract class Application
	{
		protected $httpRequest;
		protected $httpResponse;
		protected $name;

		function __construct()
		{
			$this->httpResponse = new HTTPRequest()
			$this->httpResponse = new HTTPResponse();
			$this->name = '';
		}

		abstract public function run();

		public function httpRequest()
		{
			return $this->httpRequest;
		}

		public function httpResponse()
		{
			return $this->httpResponse;
		}

		public function name()
		{
			return $this->name;
		}
	}