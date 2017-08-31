<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		
			<h1>TEST</h1>
			<table class="table table-bordered" width="100%">
				<thead>
					<tr>
						<th>No.</th>
						<th>Col 1 </th>
						<th>Some Content</th>
					</tr>
				</thead>
				<tbody id="tabresult">
					
				</tbody>
			</table>
			
			<p id="demo"></p>
		
		</div>
	</div>
	<p id="disp"></p>
	
</div>


<script>
	
	var konten = "";
	var allname = "";
	var nama = [
		["Jenny",18],
		["Lisa",23],
		["Mellinda",20]
	]
	
	for (i = 1; i <= 3; i++){
		konten += "<tr><td class='text-center'>"+ i +"</td><td> Ada " + i +  " ekor monyet di sini.</td><td><a href='#'>Yeah</a></td></tr>";
	}
	
	for (j = 0; j < nama.length; j++){
		allname += "Nama :" + nama[j] + "<br />";
	}
	var det = "";
	for (k = 0; k < nama[1].length; k++ ){
		det += "name :" + nama[1][k] +  
	}
	document.getElementById("tabresult").innerHTML = konten;
	document.getElementById("disp").innerHTML = allname;


</script>



<?php include 'footer.php'; ?>