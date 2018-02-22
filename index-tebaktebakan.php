<?php include 'header.php'; ?>

<div class="container">
	<h1 class="text-center">Tebak-tebakan aja oy!</h1>
	<div class="row">
		<div class="col-md-12 text-center">
		
			<!-- correct script -->
			<p class="guesses"></p>
			<p class="lastResult"></p>
			<p class="lowOrHi"></p>

			<label for="guessField">Enter a guess: </label>
			<input type="text" id="guessField" class="guessField">
			<input type="submit" value="Submit guess" class="guessSubmit">		
						
			
			<!--
			<p class="tebakan"></p>
			<p class="angkabarusan"></p>
			<p class="besarkecil"></p>
			
			<label for "areatebakan">Masukin angka tebakan lo: </label> <br />
			<input type="text" id="areaTebakan" class="areaTebakan"> <br />
			<input type="submit" value="Kirim Tebakan" class="kirimTebakan">
			<br />
			<input type="submit" value="Pencet" class="tesaja"> -->
	
		 
		</div>
	</div>
</div>
<script>


var randomNumber = Math.floor(Math.random() * 100) + 1;

var guesses = document.querySelector('.guesses');
var lastResult = document.querySelector('.lastResult');
var lowOrHi = document.querySelector('.lowOrHi');

var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton;

function checkGuess() {
  var userGuess = Number(guessField.value);
  if (guessCount === 1) {
    guesses.textContent = 'Previous guesses: ';
  }
  guesses.textContent += userGuess + ' ';
 
  if (userGuess === randomNumber) {
    lastResult.textContent = 'Congratulations! You got it right!';
    lastResult.style.backgroundColor = 'green';
    lowOrHi.textContent = '';
    setGameOver();
  } else if (guessCount === 10) {
    lastResult.textContent = '!!!GAME OVER!!!';
    setGameOver();
  } else {
    lastResult.textContent = 'Wrong!';
    lastResult.style.backgroundColor = 'red';
    if(userGuess < randomNumber) {
      lowOrHi.textContent = 'Last guess was too low!';
    } else if(userGuess > randomNumber) {
      lowOrHi.textContent = 'Last guess was too high!';
    }
  }
 
  guessCount++;
  guessField.value = '';
  guessField.focus();
}

	guessSubmit.addEventListener('click', checkGuess);

function setGameOver() {
  guessField.disabled = true;
  guessSubmit.disabled = true;
  resetButton = document.createElement('button');
  resetButton.textContent = 'Start new game';
  document.body.appendChild(resetButton);
  resetButton.addEventListener('click', resetGame);
}

function resetGame() {
  guessCount = 1;

  var resetParas = document.querySelectorAll('.resultParas p');
  for (var i = 0 ; i < resetParas.length ; i++) {
    resetParas[i].textContent = '';
  }

  resetButton.parentNode.removeChild(resetButton);

  guessField.disabled = false;
  guessSubmit.disabled = false;
  guessField.value = '';
  guessField.focus();

  lastResult.style.backgroundColor = 'white';

  randomNumber = Math.floor(Math.random() * 100) + 1;
}

	/*
	
	var nomorAsal = Math.floor(Math.random()*100) + 1;
	
	var tebakan = document.querySelector('.tebakan');
	var angkabarusan = document.querySelector('.angkabarusan');
	var lebihbesarataukecil = document.querySelector('.besarkecil');
	
	var kirimtebakan = document.querySelector('.kirimTebakan');
	var areatebakan = document.querySelector('.areaTebakan');
	
	var jmlTebakan = 1;
	var tombolReset;
	
	function checkGuess(){
		var tebakanLu = Number(areatebakan.value);
		if (jmlTebakan === 1){
			tebakan.textContent = 'Tebakan Sebelumnya: ';
		}
		tebakan.textContent = tebakanLu + '  ';
		
		if (tebakanLu === nomorAsal){
			angkabarusan.textContent = 'Selamat! Anda Juara!';
			angkabarusan.style.background = 'green';
			lebihbesarataukecil.textContent = '';
			setGameOver();
		} else if ( jmlTebakan === 10){
			angkabarusan.textContent = 'Game Over! U SUCK!';
			setGameOver();
		} else {
			angkabarusan.textContent = 'Salah lu!';
			angkabarusan.style.backgroundColor = 'red';
			if (tebakanLu < nomorAsal){
				lebihbesarataukecil.textContent = 'Tebakan barusan terlalu rendah!';
			} else if (tebakanLu > nomorAsal) {
				lebihbesarataukecil.textContent = 'Tebakan barusan terlalu tinggi!';
			}
		}
		
		jmlTebakan++;
		areaTebakan.value = '';
		areaTebakan.focus();
		
	}
	
	function cekaja(){
		alert('lah');
	}
		
	kirimtebakan.addEventListener('click', checkGuess);
*/

</script>
<?php include 'footer.php'; ?>
