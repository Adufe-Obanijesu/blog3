<?php
 $conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
	$title = $_POST['title'];
	$type = $_POST['type'];
	$post = $_POST['post'];
	$by = $_POST['by'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$hrs = $_POST['hrs'];
	$mins = $_POST['mins'];
	$like = '0';
	$view = '0';
	$mins = $_POST['mins'];
	$target = "../uploads/".basename($_FILES['image']['name']);
	 $db = mysqli_connect('localhost', 'root', 'joshua123', 'joe');		
		 $image = $_FILES['image']['name'];
		 
		
		 if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			 $img = 'Image upload was successful';
			 echo '<br>';
		 }else{
		echo 'nothing';
	}
	
	$sql = "insert into posts (title, type, post, bye, year, month, day, hrs, mins, image, lik, view) values('$title','$type','$post','$by','$year','$month','$day','$hrs','$mins','$image', '$like', '$view')";
	$query = mysqli_query($conn, $sql);
	if($query){
		echo 'Post was successfully uploaded';
	}
?>