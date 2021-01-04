<table>
	<tr>
<TH>BOOK TITLE</TH>
<TH>AUTHORS NAME</TH>
<TH>BOOK DESCRIPTIONS</TH>
	
	<?php foreach ($books as $book) {
		
	 ?>
	 
	 	<tr>
	 	<td>
	 		<a href="index.php?book=<?php echo $book->title; ?>"><?php echo $book->title; ?></a>
	 	</td>
	 	<td>
	 		<?php echo $book->author; ?>
	 	</td>
	 	<td>
	 		<?php echo $book->description; ?>
	 	</td>

	 </tr>
	<?php } ?>
	</tr>

</table>