<?php include 'header.php'; ?>

<br />
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1 class="judul">Ngisi-ngisian</h1>
			<p class="pesan"></p>
			<p class="angka"></p>
		</div>
		
		<div class="col-md-6">
			<form>
			  <div class="form-group">
				<input type="text" class="form-control" id="userinput" aria-describedby="" placeholder="Input Number 1-3">
			  </div>
			  <button type="button" id="kirim" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		
	</div>
</div>
<script>

	
	var pesan = document.querySelector('.pesan');
    var kirim = document.getElementById('kirim');
	var userinput = document.getElementById('userinput');
	var angka = document.querySelector('.angka');
	
	function doSomething(){
		var AngkaCPU = Math.floor(Math.random() * 3) + 1;
		
		if (userinput === AngkaCPU){
			pesan.innerHTML = 'Sama!';
		} else {
			pesan.innerHTML = 'Nggak Sama!';
			angka.textContent = AngkaCPU;
		}
		
	}
	
	kirim.addEventListener('click', doSomething);
	
</script>
<?php include 'footer.php'; ?>
