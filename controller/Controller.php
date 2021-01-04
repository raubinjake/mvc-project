<?php
include "./model/Model.php";
/**
 * 
 */
class Controller
{
	public $model;
	public function __construct()
	{
		$this->model=new model();

	}
	public function invoke(){
		if(!isset($_GET['book'])){

			$books=$this->model->getBookDetails();
			include './view/bookList.php';
		}
		else{

			$book=$this->model->getBook($_GET['book']);
			include './view/booksDetails.php';
		}
	}
}

?>