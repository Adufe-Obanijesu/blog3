<html class='w3-responsive'>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>
	News
</title>
<style>
	#close{
		display : none;
	}
	.linkCont{
	background-color : #ffcc00;
	width : 98.7%;
	height : 50px
}
	#body1{
		float : left;
		width : 20%;
		position : fixed;
		width : 25%; 
	}
	#body2{
		width : 73%;
		float : right;
		margin-left : 2%;
	}
	.navigation{
	float : left;
	font-family : sans serif;
	font-size : 140%;
	color : white;
	padding : 7px 10px 5px 10px;
}
@media screen and (max-width : 1297px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 125%;
		color : white;
		padding : 5px 10px;
}
}
@media screen and (max-width : 1190px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 110%;
		color : white;
		padding : 10px 10px 5px 10px;
}
}
@media screen and (max-width : 1081px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 100%;
		color : white;
		padding : 13px 10px 5px 10px;
}
}
@media screen and (max-width : 1006px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 100%;
		color : white;
		padding : 13px 10px 0px 10px;
}
}
@media screen and (max-width : 760px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 100%;
		color : white;
		padding : 13px 10px 0px 10px;
}
}
@media screen and (max-width : 734px){
	.navigation{
		float : left;
		font-family : sans serif;
		font-size : 100%;
		color : white;
		padding : 13px 10px 0px 10px;
}
}
	.rowCards{
	float : left;
	width : 32.45%;
	}
	.rowCardsContent{
	height : 100px;
	overflow : hidden;
	}
	.rowCards{
		flex-basis : 23.7%;
	}
	#container{
		display : flex;
		flex-wrap : wrap
	}
	#positioning{
	 margin-top : 35%;
}
	@media screen and (max-width : 996px){
		#body1{
			display : none;
		}
		#body2{
			float : left;
			margin-left : 2%;
			padding-right : 2%;
			width : 100%;
			
		}
	}
	
</style>
</head>
<body>
	<div id='body1' class='w3-display-container' style='height : 100%; margin-right : 2%; position : fixed; background-color : #ffcc00'>
	<div onclick="w3_close()" class="w3-closenav w3-xxlarge w3-hover-red w3-padding w3-display-topright" id='close'>&times;</div>
		 <div id='positioning' style='width : 90%; background-color : black; height : auto; margin-left : 10%;'>
		<div style='padding-top : 10%; padding-bottom : 3%'>
			<h1 style='color : white; font-weight : bold; font-family : sans serif; font-size : 600%' class='w3-center'>
				45
			</h1>
			<hr class='w3-center w3-text-grey'>
			<p style=' color : white' class='w3-center w3-xlarge'>
			    Designs for Blog Post Slider/Carousel <br>Layout
			</p>
		</div>
		</div>
	</div>

	<div id='body2'class=''>
		<div class='w3-center'>
			<h1>
				SPORT
			</h1>
		</div>
		<br>
		<div class="linkCont" style=''>
		<div class='' style='margin-left : 7%; margin-right : 4%'>
			<div class="navigation">
				<a href="news.php" class='mainLink' style='text-decoration : none;'>
					News
				</a>
			</div>
			<div class="navigation">
				<a href="music.php" class='mainLink' style='text-decoration : none;'>
					Music
				</a>
			</div>
			<div class="navigation">
				<a href="videos.php" class='mainLink' style='text-decoration : none;'>
					Videos
				</a>
			</div>
			<div class="navigation">
				<a href="entertainment.php" class='mainLink' style='text-decoration : none;'>
					Entertainment
				</a>
			</div>
			<div class="navigation">
				<a href="sport.php" class='mainLink' style='text-decoration : none;'>
					Sport
				</a>
			</div>
			<div class="navigation">
				<a class='mainLink' href="education.php" style='text-decoration : none;'>
					Education
				</a>
			</div>
			<div class="navigation">
				<a class='mainLink' id='lastLink' href="" style='text-decoration : none;'>
					Face of the Week
				</a>
			</div>
		</div>
		</div>
		<br>
		<div id='container'>
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='Sport'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
				<div>
				<img src='../uploads/<?php echo $image; ?>' style='width : 100%; height : 150px;'>
			</div>
			
			
			<h4 style='font-weight : bold; font-family : sans serif'>
				Title : <?php echo $title; ?>
			</h4>
			<p style='opacity : .5; margin-top : -4%; font-family : sans serif'>
				By <?php echo $by; ?>
			</p>
			<p style='font-family : sans serif; margin-top : -4%' class='rowCardsContent'>
				<?php echo $post; ?>
			</p>
			<form action='showPosts.php' method='post'>
			<input type='text' value='<?php echo $id; ?>' name='ids' style='display : none'>
			<input type='submit' class='w3-white w3-border w3-btn w3-border-grey w3-round w3-padding-small w3-text-grey' style='margin-top : -3%; margin-bottom : 5%' value='Learn more'>
				
			</form>
			</div>
			</div>
			<?php
				}
			}else{
				echo 'Query was not successful';
			}?>

			</div>
			<div style='float : left; width : 100%'>
		<br>
		<footer style='margin-top : -1%;auto; background-color : #ffcc00; width : 100%'>
	    <br>
		<h2 class='w3-center w3-text-white w3-margin-left' style='font-size : 90%'>&copy 2018 JOZZY BLOG.</h2>
		<h2 class='w3-center w3-text-white w3-margin-left' style='font-size : 90%'>Beautifully crafted by Adufe </h2>
		<h3 class='w3-center w3-text-white w3-margin-left' style='font-size : 90%'>Contact : (+234)8035553294</h3>
	    <div class='w3-center w3-margin-right'>
		    <span class='w3-margin-left fa fa-instagram w3-text-red w3-hover-opacity' style='cursor : pointer; font-size : 200%'><a href='instagram@dmaygstudios.com'></a></span>
		    <span class='w3-margin-left fa fa-facebook w3-text-blue w3-hover-opacity' style='cursor : pointer; font-size : 200%'><a href='facebook@dmaygstudios.com'></a></span>
		 </div>
	</footer>
	</div>
	</div>
<script>
//alert(window.innerWidth);
</script>	
</body>
</html>