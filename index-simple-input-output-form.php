<?php include 'header.php'; ?>

<div class="container">
	<h1 class="text-center">Isi Field</h1>
	<div class="row">
		<div class="col-md-12 text-center">
			
			<p class="something"></p>
			
			<div class="form-group">
				<label for="tes">Type Something</label>
				<input type="text" class="form-control" id="tes" aria-describedby="emailHelp" placeholder="Type Something">
				<small id="minitexx=t" class="form-text text-muted">Something Here</small>
			 </div>
			<button type="submit" id="kirim" class="btn btn-primary">Submit</button>
		
		</div>
	</div>
</div>
<script>
	

	var paragraf = document.querySelector('.something');
	var box1 = document.getElementById('tes');
	var submitbutton = document.getElementById('kirim');
	
	paragraf = '';
	
	function displaytext(){
		var isi = box1.value;
		document.querySelector('.something').textContent = "Baru aja input: " + isi +"!";
	}
	
	submitbutton.addEventListener('click', displaytext);

</script>
<?php include 'footer.php'; ?>
