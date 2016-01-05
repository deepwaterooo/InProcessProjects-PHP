<?php
class Route {
	private $_uri = [];
	//private $_method = array();

	/**
	 * Builds a collection of internal URL's to look for
	 * @param type $uri
	 */
	public function add($uri, $method = null) {
		$this->uri[] = $uri;
	}

	/*
		$this->uri[] = '/' . trim($uri, '/');
		if ($method != null) {
			this->method[] = $method;
		}
	}
	   */
	public function	submit() {
		$_REQUEST['uri'];
				echo "before get!"

		/*
		$uriGetParam = isset($_GET['uri']) ? $_GET(['uri']) : '/';
		foreach($this->uri as $key => $value) {
			if (preg_match("#^$value$#", $uriGetParam)) {
				echo "match!"
				
				//$useMethod = $this->_method([$key]);
				//new $useMethod; 
			} 
		}
		*/
		
	}
}

?>
