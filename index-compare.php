<?php include 'header.php'; ?>

<br />
<h1 class="judul text-center">Ngisi-ngisian</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">	
			<table class="table table-bordered text-center">
				<tr>
					<td colspan="2"><p class="gameturn"></p></td>
				</tr>
				<tr>
					<td width="50%">CPU Num</td>
					<td>U Num</td>
				</tr>
				<tr>
					<td><p class="cpunum"></p></td>
					<td><p class="yournum"></p></td>
				</tr>
				<tr>
					<td><p class="cpusym"></p></td>
					<td><p class="yoursym"></p></td>
				</tr>
				<tr>
					<td colspan="2"><p class="pesan"></p></td>
				<tr>			
			</table>
		</div>
		
		<div class="col-md-6">
			<form>
			  <div class="form-group">
				
				<select id="userinput" class="form-control form-control-lg" >
					<option value="1">Gunting</option>
					<option value="2">Batu</option>
					<option value="3">Kain</option>
				</select>
			  	
			  </div>
			  <button type="button" id="kirim" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<script>
	
	var turn = 1;
	
	var gameturn = document.querySelector('.gameturn');
	var cpunum = document.querySelector('.cpunum');
	var yournum = document.querySelector('.yournum');
    var kirim = document.getElementById('kirim');
	var userinput = document.getElementById('userinput');
	var pesan = document.querySelector('.pesan');
	var cpusym = document.querySelector('.cpusym');
	var yoursym = document.querySelector('.yoursym');
	

	
	
	
	function doSomething(){
	
			var AngkaCPU = Math.floor(Math.random() * 3) + 1;
			cpunum.textContent = AngkaCPU ;
			var nomorGue = userinput.value;
			yournum.textContent = nomorGue;		
			
			/* generate cpu stand */
			if(AngkaCPU == 1){
				cpusym.textContent = 'Gunting!';
			} else if (AngkaCPU == 2){
				cpusym.textContent = 'Batu!';
			} else {
				cpusym.textContent = 'Kain';
			}	
			
			/* generate my stand */
			if(nomorGue == 1){
				yoursym.textContent = 'Gunting!';
			} else if (nomorGue == 2){
				yoursym.textContent = 'Batu!';
			} else {
				yoursym.textContent = 'Kain';
			}			
			
			/*compare your stand vs cpu stand */
			if ((AngkaCPU == 1 && nomorGue == 3) || (AngkaCPU == 2 && nomorGue == 1) || (AngkaCPU == 3 && nomorGue == 2))
			{
				pesan.textContent = 'You Lose!';
			} else if ((AngkaCPU == 1 && nomorGue == 2 ) || (AngkaCPU == 2 && nomorGue == 3) || ( AngkaCPU == 3 && nomorGue == 1))
			{
				pesan.textContent = 'You Win!';
			} else {
				pesan.textContent = '';
			}
			gameturn.textContent = 'Turn : '+ turn++;
			
		
		
		
		
	}
	
	
	
	kirim.addEventListener('click', doSomething);
	
</script>
<?php include 'footer.php'; ?>
