<?php include 'header.php'; ?>

<br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
				
				<div class="output">
					<ul></ul>
				</div>
		
		</div>
	</div>
</div>

<script>
	var list = document.querySelector('.output ul');
	list.innerHTML = '';
	var greetings = ['Happy Birthday!',
					 'Merry Christmas my love',
					 'A happy Christmas to all the family',
					 'You\'re all I want for Christmas',
					 'Kembalikan uang kami!',
					 'Get well soon'];
	
	for (i = 0; i < greetings.length; i++){
		var input = greetings[i];
		
		if (greetings[i].indexOf('Christmas')!== -1) {
			var result = input;
			var listItem = document.createElement('li');
			listItem.textContent = result;
			list.appendChild(listItem);
		  }
	}
	

</script>
<?php include 'footer.php'; ?>
