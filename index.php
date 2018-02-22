<?php  include 'header.php'; ?>

<h1>YEAH</h1>

<div>
    <table class="table" width="300" align="center">
        <thead>
        <tr>
            <td colspan="2" height="150">
                <h2><span id="mood"></span></h2>
            </td>
        </tr>
        <tr>
            <th colspan="2"><h3 id="charaname"></h3></th>
        </tr>
        </thead>
        <tbody>
            
            <tr>
                <td width="50%">Strength</td>
                <td width="50%"><span id="str"></span></td>
            </tr>  
            <tr>
                <td>Academic</td>
                <td><span id="int"></span></td>
            </tr> 
            <tr>
                <td>Agility</td>
                <td><span id="agi"></span></td>
            </tr> 
            <tr>
                <td>Vitality</td>
                <td><span id="vit"></span></td>
            </tr> 
            <tr>
                <td>Karma</td>
                <td><span id="krm"></span></td>
            </tr> 
        </tbody>  
    <table>
</div>


<script>

    var chara = {
        name: "Lisa",
        str: 13,
        int: 32,
        agi: 23,
        vit: 43,
        krm: 43,
        mod: 24
    };
    
    
    // shortcut to display elements
    var getName = document.getElementById("charaname");
    var getStr = document.getElementById("str");
    var getInt = document.getElementById("int");
    var getAgi = document.getElementById("agi");
    var getVit = document.getElementById("vit");
    var getKrm = document.getElementById("krm");
    var getMood = document.getElementById("mood");

    

    //var getMood = document.getElementbyId("mod");
    
    //calculate the mood
    var currentMood = function(x){
       if (x == 0) {
           return "Mad";
       } else if (x < 20) {
           return "Sad";
       } else if (x < 40) {
           return "Indifference";
       } else if (x < 60) {
           return "Glad";
       } else if (x < 75) {
           return "Excite";
       } else {
           return "Happy!";
       }
    };

    

    //pull the basic parameter value from object
    getName.innerHTML = chara.name;
    getStr.innerHTML = chara.str;
    getInt.innerHTML = chara.int;
    getAgi.innerHTML = chara.agi;
    getVit.innerHTML = chara.vit;
    getKrm.innerHTML = chara.krm;
    getMood.innerHTML = currentMood(chara.mod);



</script>


<?php include 'footer.php'; ?>