<?php include 'header.php'; ?>

<br />
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			
			<a href="#" class="btn btn-primary mybutton" role="button">Press Me!</a>
			<br /><br />
			<p class="presscount"></p>
		
		</div>
	</div>
</div>

<script>
  
	var mybutton = document.querySelector('.mybutton');
	var presscount = document.querySelector('.presscount');
	presscount.value = 0;
	
	function pencet(){
		presscount.value++;
		
		if (presscount.value === 1){
			presscount.textContent = "You've pressed " + presscount.value + " time";
		} else if (presscount.value === 10) {
			mybutton.classList.add('disabled');
			presscount.textContent = "You've pressed  too many! Stop it already Dammit!";
		}
		else {
			presscount.textContent = "You've pressed " + presscount.value + " times";
		}
	}
	
	mybutton.addEventListener('click',pencet);
  
</script>
<?php include 'footer.php'; ?>
