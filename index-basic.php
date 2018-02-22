<?php include 'header.php'; 

/* list of data */

$custdata = [
	['Jennie',18],
	['Sharon',19],
	['Minmay',16],
	['Hertha','box']
]



?>

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
					
						<?php 
							for ($i = 0; $i < sizeof($custdata); $i++) {
								
								  echo "<tr><td> $i</td>";
								  for ($col = 0; $col < 2; $col++) {
									 echo "<td>".$custdata[$i][$col]."</td>";
								  }
								  echo "</td>";
							}
							
						?>
					
				</tbody>
			</table>
			
			<p id="demo"></p>
		
		</div>
	</div>
	<p id="disp"></p>
	
</div>





<?php include 'footer.php'; ?>