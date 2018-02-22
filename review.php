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
  
    class Package {
        constructor(pactitle, pacweight, pacdesc){
            this._pactitle = pactitle;
            this._pacweight = pacweight;
            this._pacdesc = pacdesc;
        }
        
        get pactitle(){
            return this._pactitle;
        } 
        get pacweight(){
            return this._pacweight;
        } 
        get pacdesc(){
            return this._pacdesc;
        } 
        addWeight(n){
            this._pacweight += n;
        }
    }

    
    var myItem1 = new Package(
        "Makanan Cadangan Untuk Keadaan Darurat",
        23,
        "Plop down in the middle where everybody walks rub whiskers on bare skin act innocent for slap owner's face at 5am until human fills food dish. Use lap as chair chirp at birds see owner, run in terror so hunt by meowing"
    );
    

       //generate title
       var judul = document.createElement('h1'); 
       judul.textContent = myItem1.pactitle; 
       document.getElementById('itemPlace').appendChild(judul);
        
        //generate paragraph
        var desc = document.createElement('p');
        desc.textContent =  myItem1.pacdesc; 
        document.getElementById('itemPlace').appendChild(desc);
    
         //generate span
        var wg = document.createElement('span');
        wg.textContent = 'Berat ' + myItem1.pacweight + 'kg'; 
        document.getElementById('itemPlace').appendChild(wg);
    
    
</script>