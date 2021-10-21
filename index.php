<?php

class Movie
{
	public $titles;
	public $duration;
	public $price;

	function __construct($_title, $_duration, $_price)
	{
		$this->title = $_title;
		$this->duration = $_duration;
		$this->price = $_price;
	}

	function isLongMovie()
	{
		return $this->duration > 100;
	}
}

$firstMovie = new Movie('Titolo 1', 120, 10);
$secondMovie = new Movie('Titolo 2', 70, 8);

var_dump($firstMovie);
var_dump($secondMovie);
var_dump($secondMovie->isLongMovie());
var_dump($firstMovie->isLongMovie());
