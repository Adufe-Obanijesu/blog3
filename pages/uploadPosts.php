<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>
	Upload Post
</title>
<style>
	#body2{
	width : 61%;
	height : 100%;
	margin-right : 2%;
	float : right
    }
	#positioning{
		 margin-top : 35%;
	}
	#close{
		display : none;
	}
	#postBoxCont{
		margin-bottom : 5%;
	}
	.postPadding{
		margin : 25px 0px;
	}
	.postPadding1{
		margin : 0px 0px 65px 0px;
	}
	.postBox{
		float : right;
		width : 60%;
	}
	#SI{
	}
	#collapseButton{
		float : left;
		cursor : pointer;
		visibility : hidden
	}
		.sideLinksCont{
		margin : 50% 0%;
	}
	.views{
		display : none;
	}
	.view{
		display : block;
	}
	.rowCards{
	float : left;
	width : 30.45%;
	}
	.rowCardsContent{
	height : 100px;
	overflow : hidden;
	}
	@media screen and (max-height : 458px){
		.sideLinksCont{
		margin : 10% 0%;
	}
	}
	.sideLinks{
		padding : 20px 10px;
		cursor : pointer
	}
	.sideLinks:hover{
		background : grey
	}
	@media screen and (max-width : 619px){
		#body1{
			display : none;
		}
		#body2{
			width : 96%;
			float : left;
			margin : 0% 2%;
		}
		#collapseButton{
		float : left;
		cursor : pointer;
		visibility : visible
		}
		#close{
			display : block;
		}
	}
</style>
</head>
<body>

	<div id='body1' class='w3-display-container' style='width : 35%; height : 100%; margin-right : 2%; position : fixed; background-color : #ffcc00'>
	 <div onclick="w3_close()" class="w3-closenav w3-xxlarge w3-hover-red w3-padding w3-display-topright" id='close'>&times;</div>
	   <div class='sideLinksCont'>
			<div class='w3-center sideLinks' onclick='showUploadPosts()'>
				Upload Posts
			</div>
			<div class='w3-center sideLinks' onclick="document.getElementById('viewPosts').style.display='block'">
				View Posts
			</div>
			<div class='w3-center sideLinks' onclick='showEditPosts()'>
				Edit Posts
			</div>
		</div>
	</div>
	
	<div id='body2' class='' style=''>
	<!-- UPLOADING POSTS -->
	<div id='upload'>
	<h1 class='w3-center' style='font-family : sans serif'>
		<span class="w3-xlarge rightNav w3-btn w3-round w3-teal w3-padding-small" onclick="w3_open()" id='collapseButton'>&#9776;</span>
		JOZZY BLOG
	</h1>
	<div class='' id='postBoxCont'>
		<form method="post" class='' action="uploadPost.php" enctype="multipart/form-data">
		<div>
			<input type='text' name='year' id='year' class='w3-input w3-border postBox' readonly style='display : none'><br>
			<input type='text' name='month' id='month' class='w3-input w3-border postBox' readonly style='display : none'><br>
			<input type='text' name='day' id='day' class='w3-input w3-border postBox' readonly style='display : none'><br>
			<input type='text' name='hrs' id='hrs' class='w3-input w3-border postBox' readonly style='display : none'><br>
			<input type='text' name='mins' id='mins' class='w3-input w3-border postBox' readonly style='display : none'><br>
		</div>
		<fieldset>
		<legend>Upload Post</legend>
		<div class='postPadding'>
		    Title : <input type='text' name='title' id='title' class='w3-input w3-border postBox' style=''><br>
		</div>
		<div class='postPadding'>
		    Type : <select name='type' id='type' class='w3-input w3-border postBox' style=''>
				<option>News</option>
				<option>Music</option>
				<option>Videos</option>
				<option>Entertainment</option>
				<option>Sport</option>
				<option>Education</option>
				<option>Face of the Week</option>
			</select><br>
		</div>
		
		<div class='postPadding1'>
			<span id='SI'>Post :</span> <textarea name='post' id='post' class='w3-input w3-border postBox' style=''></textarea><br>
		</div>
		<div class='postPadding'>
			Image : <input type='file' name='image' id='image' class='w3-input w3-border postBox' style=''><br>
		</div>	
		<div class='postPadding'>
			By : <input type='text' name='by' id='by' class='w3-input w3-border postBox' style=''><br>
		</div>	
			<input type='submit' class='w3-btn w3-round w3-padding-small w3-blue' value='submit'>
			</fieldset>
			<br>	
  </form>
	</div>
	</div>
	 <div id="viewPosts" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('viewPosts').style.display='none'" class="w3-closebtn">&times;</span>
        <br>
        <br>
		<div id='showNews' onclick='openPosts(viewNews)' class='w3-btn w3-block w3-blue'>
			News
		</div>
		<div id='showMusic'  onclick='openPosts(viewMusic)' class='w3-btn w3-block w3-blue'>
			Music
		</div>
		<div id='showVideos'  onclick='openPosts(viewVideos)' class='w3-btn w3-block w3-blue'>
			Videos
		</div>
		<div id='showEntertainment'  onclick='openPosts(viewEntertainment)' class='w3-btn w3-block w3-blue'>
			Entertainment
		</div>
		<div id='showSport' onclick='openPosts(viewSport)' class='w3-btn w3-block w3-blue'>
			Sport
		</div>
		<div id='showEducation'  onclick='openPosts(viewEducation)' class='w3-btn w3-block w3-blue'>
			Education
		</div>
		<br>
		<br>
      </div>
    </div>
  </div>
  <div id='menu2'>
  <div id='viewNews' class='views'>
  <h3 class='w3-center' style='font-family : sans serif'>News</h3>
  <div id='container'>
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='News'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
					$view = $row['view'];
					$like = $row['lik'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
				<div class='w3-display-container'>
				<div class='w3-display-topright'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-eye'></span><?php echo $view; ?></span>
				</div>
				<div class='w3-display-topleft'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-thumbs-up'></span><?php echo $like; ?></span>
				</div>
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
  </div>
  <div id='viewMusic' class='views'>
   <h3 class='w3-center' style='font-family : sans serif'>Music</h3>
  <div id='container'>
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='Music'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
					$view = $row['view'];
					$like = $row['lik'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
				<div class='w3-display-container'>
				<div class='w3-display-topright'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-eye'></span><?php echo $view; ?></span>
				</div>
				<div class='w3-display-topleft'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-thumbs-up'></span><?php echo $like; ?></span>
				</div>
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
  </div>
  <div id='viewVideos' class='views'>
   <h3 class='w3-center' style='font-family : sans serif'>Videos</h3>
  <div id='container'>
  
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='Videos'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
					$view = $row['view'];
					$like = $row['lik'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
			<div class='w3-display-container'>
				<div class='w3-display-topright'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-eye'></span><?php echo $view; ?></span>
				</div>
				<div class='w3-display-topleft'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-thumbs-up'></span><?php echo $like; ?></span>
				</div>
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
  </div>
  <div id='viewEntertainment' class='views'>
   <h3 class='w3-center' style='font-family : sans serif'>Entertainment</h3>
  <div id='container'>
 
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='Entertainment'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
					$view = $row['view'];
					$like = $row['lik'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
			<div class='w3-display-container'>
				<div class='w3-display-topright'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-eye'></span><?php echo $view; ?></span>
				</div>
				<div class='w3-display-topleft'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-thumbs-up'></span><?php echo $like; ?></span>
				</div>
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
  </div>
  <div id='viewSport' class='views'>
   <h3 class='w3-center' style='font-family : sans serif'>Sport</h3>
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
					$view = $row['view'];
					$like = $row['lik'];
			
		?>
		
		<div class='rowCards' style='margin-right : 1.3%'>
			<div class='container-box'>
			<div class='w3-display-container'>
				<div class='w3-display-topright'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-eye'></span><?php echo $view; ?></span>
				</div>
				<div class='w3-display-topleft'>
				<span class='w3-tags w3-blue w3-padding-small w3-large w3-circle'><span class='fa fa-thumbs-up'></span><?php echo $like; ?></span>
				</div>
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
  </div>
  <div id='viewEducation' class='views'>
   <h3 class='w3-center' style='font-family : sans serif'>Education</h3>
  <div id='container'>
		<?php
			$conn = mysqli_connect('localhost', 'root', 'joshua123', 'joe');
			$sql = "select * from posts where type='Education'";
			$query = mysqli_query($conn, $sql);
			if($query){
				while($row = mysqli_fetch_array($query)){
					$title = $row['title'];
					$by = $row['bye'];
					$post = $row['post'];
					$image = $row['image'];
					$id = $row['id'];
					$view = $row['view'];
					$like = $row['lik'];
			
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
  </div>
  </div>
  
 
	</div>
	
<script>
//news, music, videos, entertainment, sport, education, face of the week
// uploads for each, editing, view
//time, id, no, views
//alert(window.innerHeight +''+ document.getElementById('postBoxCont').clientHeight)
//alert(window.innerWidth)
//Creating Time

/*function submit(){
	var title = document.getElementById('title').value;
	var type = document.getElementById('type').value;
	var post = document.getElementById('post').value;
	var by = document.getElementById('by').value;
	var image = document.getElementById('image').value;
	var year = document.getElementById('year').value;
	var month = document.getElementById('month').value;
	var day = document.getElementById('day').value;
	var hrs = document.getElementById('hrs').value;
	var mins = document.getElementById('mins').value;
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'uploadPost.php?title=title & type = type & post = post & by = by & image = image & year = year & month = month & day = day & hrs = hrs & mins = mins', true);
	xhr.onload = function(){
		console.log(this.responseText);
	}
	xhr.send();
}

*/
function w3_open() {
		document.getElementById("body1").style.display = "block";
		document.getElementById("body1").style.width = "45%";
		document.getElementById("body2").style.marginLeft = "47%";
    }
	function w3_close() {
    document.getElementById("body1").style.display = "none";
	document.getElementById("body2").style.marginLeft = "0%";
}
function showUploadPosts(){
	document.getElementById("menu2").style.display = "none";
	document.getElementById("upload").style.display = "block";
}
function openPosts(el){
	document.getElementById('upload').style.display='none';
	document.getElementById('viewPosts').style.display='none';
	document.getElementById("menu2").style.display = "block";
	var kids = document.getElementById('menu2').children;
		for(var i = 0; i < kids.length; i++){
			kids[i].className = 'views';
		}
	el.className = 'view';
}
function time(){
	var date = new Date();
	var year = date.getFullYear();
	var month = date.getMonth();
	var day = date.getDate();
	var hrs = date.getHours();
	var mins = date.getMinutes();
	document.getElementById('year').value = year;
	document.getElementById('month').value = month+1;
	document.getElementById('day').value = day;
	document.getElementById('hrs').value = hrs;
	document.getElementById('mins').value = mins;
}
setInterval(time, 1000);
</script>
</body>
</html>