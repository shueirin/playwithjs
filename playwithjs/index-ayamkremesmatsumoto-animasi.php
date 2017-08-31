<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		
			<h2 id="tit">Ayam Kremes Mat Sumoto</h2>
			
			<p id ="lol"></p>
			<p id="url"></p>
		
		</div>
	</div>
</div>
<script>


var element = document.getElementById('tit');

var textNode = element.childNodes[0];
var text = textNode.data;

setInterval(function(){
	
	text = text[text.length - 1] + text.substring(0,text.length - 1);
	textNode.data = text;
	
}, 122);	

var teks = '';
for (i = 1; i <= 10; i++){
	teks += i + '<br >';
	document.getElementById('lol').innerHTML = teks;
}	


var myurl = document.URL;
document.getElementById('url').innerHTML = "This website URL is: "+ myurl;



</script>
<?php include 'footer.php'; ?>
