
<html>

<body>
<div id='output'>

</div>
	<script>
	window.addEventListener('load', get);
	function get(){
		var xml = new XMLHttpRequest();
		xml.open('GET', 'uploadPosts.html', true);
		xml.onload = function(){
			document.getElementById('output').innerHTML = this.responseText;
		}
		xml.send();
	}
	setInterval(get, 1000)
	
	</script>

</body>
</html>