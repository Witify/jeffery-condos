<?php

namespace App\Translate;

class Translate {

	private $language;
	private $translations;

	function __construct($language)
	{
		$this->language = $language;
		$this->translations = include 'lang'. '/' . $language . '.php';
		$_SESSION['lang'] = $this->language;
	}

	public function get($key)
	{
		echo $this->translations[$key];
	}

}