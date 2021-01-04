<?php

include "Book.php";
/**
 * 
 */
class Model
{
	
	public function getBookDetails()
	{
		return array("Love book"=>new Book('Love book','Chetan Bhagat','Romantic Book'),"Great india"=>new Book('Great india','Sardar Patel','Nationalist'),
             "Great india"=>new Book('Great india','Sardar Patel','Nationalist'),
             "Great india For win"=>new Book('Great india For win','Manmohan singh','Nationalist'),
             "Great india Struggle"=>new Book('Great india Struggle','Pandit Jawahar Lal Nehru','Nationalist'),
             "Great india For Best Unity"=>new Book('Great india For Best Unity','Atal Bihari Bajpeyee','Nationalist'),
             "Great india For Best Economy"=>new Book('Great india For Best Economy','Narendra Modi','Nationalist'),
             "Great india For Freedom"=>new Book('Great india For Freedom','Indira Gandhi','Nationalist'),
             "Great india For Honest People"=>new Book('Great india For Honest People','Munsi Premchand','Nationalist'),
             "Great india For LongLive"=>new Book('Great india For LongLive','Lala Lajpat RAi','Nationalist'),
             "Great india For Good Contitution"=>new Book('Great india For Good Contitution','Bhim Raw Ambedkar','Nationalist'),
             "Great india For Fighting With Poor People"=>new Book('Great india For Fighting With Poor People','Soniya Gandhi','Nationalist'),
             "Great india For Good Nation"=>new Book('Great india For Good Nation','Arun Jeteli','Nationalist')
	);
	}


	public function getBook($title){
		$allbooks=$this->getBookDetails();
		return $allbooks[$title];

	}
}
?>