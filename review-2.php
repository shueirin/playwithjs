<?php include "header.php" ?>
<style>
    #itemPlace {
        width: 80%;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
    }
</style>
<h1>Review Study</h1>
<hr />
<section id="itemPlace"></section>

<?Php include "footer.php" ?>

<script>
    //document.body.onload = addItem;
    
    console.log(itemname);
    
    var myItem1 = {
        name: "Makanan Cadangan Untuk Keadaan Darurat",
        weight: 23,
        desc: " Plop down in the middle where everybody walks rub whiskers on bare skin act innocent for slap owner's face at 5am until human fills food dish. Use lap as chair chirp at birds see owner, run in terror so hunt by meowing",
        writeTitle(){
            return 'This is ' + this.name;
        }
    }
    
    var myItem2 = {
        name: "Sesuatu Untuk Dikerjakan Nanti",
        weight: 13,
        desc: " Poop in a handbag look delicious and drink the soapy mopping up water then puke giant foamy fur-balls climb a tree, wait for a fireman jump to fireman then scratch his face sit in window and stare ",
        writeTitle(){
          var boxtit = document.createElement('h1');
            itembox.textContent = myItem2['desc'];
            document.getElementById('itemPlace').appendChild(itembox);
        }
    }
    
    //console.log(myItem['name']); //value inside object 
    //console.log(myItem.writeTitle());  //value inside object function
    
    
    /*function addItem(n){
        
        var itemname = 'myItem' + n;
        var judul = document.createElement('h1'); //create new element
        judul.setAttribute('id','judul');  // set element's attribute
        console.log(judul);
        judul.textContent = itemname.writeTitle();  // input the elements' content from object

        document.getElementById('itemPlace').appendChild(judul);  // attach the new element with element content using the attribute inside the html body


        var desc = document.createElement('p');
        desc.setAttribute('id','description');
        desc.textContent = itemname['desc'];
        document.getElementById('itemPlace').appendChild(desc);

        
    }*/
    
    for (var i = 1; i <= 2; i++){
       // addItem(i); 
       var itemname = 'myItem' + i;
        
        //generate title
       var judul = document.createElement('h1'); 
       judul.textContent = 'Judul' + i; 
       document.getElementById('itemPlace').appendChild(judul);
       
        //generate paragraph
        var desc = document.createElement('p');
        desc.textContent = 'Some Paragraph' + i;
        document.getElementById('itemPlace').appendChild(desc);
    }
    
    var itembox = document.createElement('p');
    itembox.textContent = myItem2['desc'];
    document.getElementById('itemPlace').appendChild(itembox);
    
    //var yeah = document.getElementById('itemPlace'); //get existing empty element on html body
    
    //yeah.innerHTML = myItem['desc']; // input content from object inside that empty element
    //console.log(yeah);
    
    
   
    
    
    
    
    
    
</script>