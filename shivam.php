<?php
	if(isset($_POST['submit'])){
		$Subject=$_POST['Subject'];
		$femail=$_POST['femail'];
	   	 $temail=$_POST['temail'];
		$msg=$_POST['msg'];
		$file=$_POST['file'];

		$to=$temail;
		$subject=$Subject;
		$message=$msg;
		$File=$file;
		$headers="From: ".$femail;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1> Thank you.</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
