<?php include 'header.php'; ?>

<br />
<h1 class="judul text-center">Ngisi-ngisian</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">	
			<table class="table table-bordered text-center">
				<tr>
					<td>CPU Num</td>
					<td>U Num</td>
				</tr>
				<tr>
					<td><p class="labeling"></p><h2 class="cpunum"></h2></td>
					<td><p class="labeling"></p><h2 class="yournum"></h2></td>
				</tr>
				<tr>
					<td colspan="2"><p class="pesan"></p></td>
				<tr>			
			</table>
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
	var cpunum = document.querySelector('.cpunum');
	var yournum = document.querySelector('.yournum');
        var kirim = document.getElementById('kirim');
	var userinput = document.getElementById('userinput');
	var pesan = document.querySelector('.pesan');
	
	function doSomething(){
		var AngkaCPU = Math.floor(Math.random() * 3) + 1;

		cpunum.textContent = AngkaCPU ;
		var nomorGue = userinput.value;
		yournum.textContent = nomorGue;
		
		if(AngkaCPU == nomorGue){
			pesan.textContent = 'Sama!';
		} else {
			pesan.textContent = 'Ga Sama!';
		}
	}
	
	kirim.addEventListener('click', doSomething);
	
</script>
<?php include 'footer.php'; ?>
