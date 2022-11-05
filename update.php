<a href="view.php">view</a>
<?php
class update{
	public function data(){
		$connect= mysqli_connect('localhost','root','','cruds');

		$update="UPDATE information SET name='$_POST[name]',phone='$_POST[phone]' WHERE id='$_POST[blog_id]'";

		mysqli_query($connect,$update);
	}
}



?>



