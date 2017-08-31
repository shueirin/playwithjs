<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		
			<h1 id="hari"></h1>
			<p id="lel">There is something in your face!</p>
			<h2 id="jam"></h2>
			<h2 id="menit"></h2>
			<h2 id="detik"></h2>
			
			<hr />
				
			<p id="lagi"></p>
			
		</div>
	</div>
</div>
<script>
	var today = new Date();  
	var day = today.getDay();
	var daylist = ["Minggu","Senen","Selasa","Rabu","Kamis","Jumat","Sabtu"];
	
	document.getElementById("hari").innerHTML = daylist[day];
	
	var hour = today.getHours();
	var minute = today.getMinutes();
	var second = today.getSeconds();
	
	document.getElementById("jam").innerHTML = hour;
	document.getElementById("menit").innerHTML = minute;
	document.getElementById("detik").innerHTML = second;
	
	// AM or PM 
	
	var prepand = (hour >= 12) ? " PM " : " AM ";
	
	hour = (hour >= 12) ? hour - 12 : hour; 
	
	if (hour === 0 && prepand === ' PM ')
	{
		if (minute === 0 && second === 0)
		{
			hour = 12;
			prepand = ' Noon';
		} else {
			hour = 12;
			prepand = ' PM';
		}
	}
	
	if (hour === 0 && prepand === ' AM ')
	{
		if (minute=== 0 && second === 0)
		{
			hour = 12;
			prepand = ' Midnight';
		} else {
			hour = 12;
			prepand = ' AM';
		}
	}
	
	document.getElementById('lel').innerHTML = "Hari ini adalah hari: " + daylist[day] + " Jam " + hour + prepand + " : " + minute + " : " + second;
	
	
	// new line
	
	var hariini = new Date();
	var dd = hariini.getDate();
	var mm = hariini.getMonth()+1;
	var yyyy = hariini.getFullYear();
	
	if (dd < 10)
	{
		dd = '0'+dd;
	}
	
	if (mm < 10 )
	{
		mm = '0'+mm;
	}
	
	hariini = mm + '/' + dd + '/' + yyyy;
	
	document.getElementById('lagi').innerHTML = hariini;
	
	

</script>
<?php include 'footer.php'; ?>
