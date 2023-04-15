<?php
class database{
	public function con()
	{
// 		$connection=mysqli_connect("localhost","root","","phonehospital");
		$connection=mysqli_connect("localhost","","","thewpked_phonehospital");
		return $connection;
	}
	
}
?>