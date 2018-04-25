<?php

	class Template {
		private $breadcrumbs = []; // contains array of Webpage objects

	    public function __get($name) {
	        // Check for existence of array key $name
	        if (array_key_exists($name, $this->breadcrumbs)) {
	            return $this->breadcrumbs[$name];
	        }
	        return null;
	    }

	    public function __set($name, $value) {
	        $this->breadcrumbs[$name] = $value;
	    }

		public function getBreadcrumbNavigation() {
			$html = "<ol>";
			$i = 0;
			$len = count($this->breadcrumbs);
			foreach ($this->breadcrumbs as $b) {
				if ($i == $len - 1) {
			        $html .= "<li>".$b->anchorText."</li>";
			    }else{
			    	$html .= "<li><a href=\"".$b->myUrl."\">".$b->anchorText."</a></li>";
			    }
				$i++;
			}
			$html .= "</ol>";
			return $html;
		}
	}

	class Webpage {
		public $anchorText, $myUrl;

	    public function __get($name) {
	        return $this->$name;
	    }

	    public function __set($name, $value) {
	        $this->$name = $value;
	    }
	}

	$webpage1 = new Webpage();
	$webpage1->anchorText = "Page";
	$webpage1->myUrl = "/section/page.html";

	$webpage2 = new Webpage();
	$webpage2->anchorText = "Other Page";
	$webpage2->myUrl = "/section/other-page.html";

	$webpage3 = new Webpage();
	$webpage3->anchorText = "Current page";
	$webpage3->myUrl = "/section/index.html";

	$template = new Template();
	$template->webpage1 = $webpage1;
	$template->webpage2 = $webpage2;
	$template->webpage3 = $webpage3;
	echo $template->getBreadcrumbNavigation();