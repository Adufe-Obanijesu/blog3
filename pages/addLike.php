<?php 
$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
$ids = $_GET['id'];
$sql = "select * from posts where id='$ids'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
				$like = $row['lik'];
$Like = intval($like)+1;
$newLike = $_GET['like'];
$sql2 = "update posts set lik='$Like' where id='$ids'";
				$query2 = mysqli_query($conn, $sql2);
				if($query2){
					echo 'Successful';
				}else{
					echo 'not successful';
				}
				echo $like.'sd';
			}}

			?>
				