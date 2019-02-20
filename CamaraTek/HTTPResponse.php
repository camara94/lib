<?php
	namespace CamaraTek

/**
 * 
 */
class HTTPResponse 
{
	
	protected $page;

	public function addHeader($header)
	{
		header($header) ;
	}

	public function redirect($location)
	{
		header('location: ' . $location);
		exit;
	}
	public function redirect404()
	{
		# code...
	}

	public function send()
	{
		// Actuellement, cette ligne a peu de sens dans votre esprit.
    	// Promis, vous saurez vraiment ce qu'elle fait d'ici la fin du chapitre
    	// (bien que je suis sûr que les noms choisis sont assez explicites !).
		
		exit($this->page->getGeneratedPage());
	}

	public function setPage(Page $page)
	{
		$this->page = $page;
	}

	public function setCookie($name, $value, $expire, $path, $domain, $secure, $httpOnly)
	{
		setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
	}
}