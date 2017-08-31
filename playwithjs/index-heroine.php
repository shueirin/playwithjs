<?php include 'header.php'; ?>

<?php include 'footer.php'; ?>

<script>
function Heroine(theName, theCharacter, theAge, defaultAffection){
   this.name = theName;
   this.chara = theCharacter;
   this.age = theAge;
   this.devAct = defaultAffection;
   
   switch(this.devAct) {
		case 1:
		  this.line = "Let's go play together!";
		  break;
		case 2:
		  this.line = "Where have you been?";
		  break;
		case 3:
		  text = "Don't make me worried! You fool!";
		  break;
		default:
		  text = "Hi, nice to meet you.";
	  }
    this.introduction = function(){
		console.log(this.name + " : " + this.line);
   	}
  }

  
 var Asuka = new Heroine("Himura Asuka", "The Tsundere Girl", 16, 2);


</script>