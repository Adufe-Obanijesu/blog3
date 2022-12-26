<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#cont{
			width : 40%; 
			margin-right : 30%; 
			margin-left : 30%
		}
		@media screen and (max-width : 817px){
			#cont{
				width : 60%; 
				margin-right : 20%; 
				margin-left : 20%
		    }
		}
	</style>
	</head>
	<body class='w3-black'>
<div class='' id='cont' style=''>
<div class="w3-closenav w3-xxlarge w3-red w3-padding w3-display-topright" onclick='window.history.back()' id='close'>&times;</div>
<?php

$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
$ids = $_POST['ids'];
			$sql = "select * from posts where id='$ids'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$image = $row['image'];
					$post = $row['post'];
					$like = $row['lik'];
					$view = $row['view'];
					$idd = $row['id'];
					
			
		?>
		
		<div class='rowCards w3-white w3-card2' style='margin-right : 1.3%; margin-top : 20%'>
			<div class='container-box'>
				<div>
				<img src='../uploads/<?php echo $image; ?>' class='w3-image' style='width : 100%; max-height : 300px; background-position : center'>
			</div>
			<div class='w3-padding'>
			
			<h4 style='font-weight : bold; font-family : sans serif'>
				Title : <?php echo $title; ?>
			</h4>
			<p style='opacity : .5; font-family : sans serif'>
				By <?php echo $by; ?>
			</p>
			<p style='font-family : sans serif' class='rowCardsContent'>
				<?php echo $post; ?>
			</p>
			<div class='w3-padding-small w3-white w3-border w3-border-grey w3-btn' onclick="this.innerHTML = 'Liked'; 
			var xhr = new XMLHttpRequest();
	xhr.open('GET', 'addLike.php?id=<?php echo $idd; ?>', true);
	xhr.onload = function(){
		console.log(this.responseText);
	}
	xhr.send();" style=''>
			<span class='fa fa-thumbs-o-up'></span> Like
			</div>
			</div>
			</div>
			</div>
			<?php
$sql = "select * from posts where id='$idd'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
				$view = $row['view'];
$view = intval($view)+1;
$sql2 = "update posts set view='$view' where id='$ids'";
				$query2 = mysqli_query($conn, $sql2);
				/*if($query2){
					echo 'Successful';
				}else{
					echo 'not successful';
				}*/
			}}
				}
			}else{
				echo 'Query was not successful';
			}?>
			</div>
			<script>
			//alert(window.innerWidth)
			</script>
			</body>