<?php
class Webpage {
	private $myUrl;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

	public function urlSection($url) // returns section from /section/mypage.html
	{
		$result = explode("/", $url);
		return $result[count($result)-2];
	}

	public function urlSection2($url) // returns section from /section/subsection/mypage.html
	{
		$result = explode("/", $url);
		return $result[count($result)-3];
	}

	public function showHighlight($requestedUrl) 
	{
		if ($requestedUrl == $this->myUrl) {
			return true;
		}
		if (basename($this->myUrl) == "index.html" && $this->urlSection($requestedUrl) == $this->urlSection($this->myUrl)) {
			return true;
		}
		if (basename($this->myUrl) == "index.html" && $this->urlSection($this->myUrl) == $this->urlSection2($requestedUrl)) {
			return true;
		}
		return false;
	} 
}

$test = new Webpage();

$test->myUrl = "/section/index.html";
var_dump($test->showHighlight("/section/page.html")).PHP_EOL; // true

$test->myUrl = "/section/page.html";
var_dump($test->showHighlight("/section/other-page.html")).PHP_EOL; // false

$test->myUrl = "/section/index.html";
var_dump($test->showHighlight("/section/subsection/index.html")).PHP_EOL; // true

$test->myUrl = "/section/index.html";
var_dump($test->showHighlight("/section/subsection/page.html")).PHP_EOL; // true

$test->myUrl = "/section/subsection/index.html";
var_dump($test->showHighlight("/section/other/index.html")).PHP_EOL; // false