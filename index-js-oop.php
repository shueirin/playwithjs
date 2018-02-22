<?php include 'header.php'; ?>
<style>
   
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <h1 id="myTitle">Just Title</h1>
        
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    
function Person(fullName, favColor){
    this.name = fullName;
    this.favoriteColor = favColor;
    this.greet = function(){
        console.log("Hello, my name is " + this.name + " and my favorite color is " + this.favoriteColor +".");
    }
    this.buyShirt = function(x){
        var howMany = x;
        if (howMany !== 1){
            console.log("Give me " + howMany + " pieces of " + this.favoriteColor + " shirts, please!");
        } else {
            console.log("Give me a " + this.favoriteColor + " shirt, please!");
        }
    }
}

    var john = new Person("John Doe", "blue");
    john.greet();
    john.buyShirt(3);
    
    var jane = new Person("Jane Smith", "green");
    jane.greet();
    jane.buyShirt(1);

</script>