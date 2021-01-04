<?php

/**
 * 
 */
class Book
{
	//Declare variable
	public $title;
	public $author;
	public $description;
	//Create a constructor
	public function __construct($title,$author,$description){
		$this->title=$title;
		$this->author=$author;
		$this->description=$description;
	}
	
}
?>