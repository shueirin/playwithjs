var newsCounter = 1;
var mainSec = document.getElementById("mainSection");
var subSec = document.getElementById("subSect");
var btn = document.getElementById("myButton");

btn.addEventListener("click", function(){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','sample-'+ newsCounter +'.json');
    ourRequest.onload = function(){
       //var mainContent = JSON.parse(ourRequest.responseText);
       var mainContent = JSON.parse(ourRequest.responseText);
       renderHTML(mainContent);    
        
    };
    ourRequest.send();
    newsCounter++;
    if (newsCounter > 2){
        btn.classList.add("disabled");
    }
});

function renderHTML(data){
    var newsResult = '';
    for (i = 0; i < data.length; i++){
        newsResult += "<img src='" + data[i].bannerURL + "' alt = '" + data[i].bannerALT + "' / >";
        newsResult += "<h1>" + data[i].title + "</h2>";
        newsResult += "<p class='lead'>" + data[i].mainlead + "</p>";   
        newsResult += "<div class='row'>";
        newsResult += "<div class='col-md-6'>";
        newsResult += "<h2>" + data[i].subTit1 + "</h2>";       
        newsResult += "<p>" + data[i].subLead1 + "</p>";
        newsResult +=  "</div>";
        newsResult += "<div class='col-md-6'>";
        newsResult += "<h2>" + data[i].subTit2 + "</h2>";       
        newsResult += "<p>" + data[i].subLead2 + "</p>";
        newsResult +=  "</div></div>";         
    }
    
    
    
    
    mainSec.insertAdjacentHTML('beforeend', newsResult);
}

/*
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET','sample.json');

ourRequest.onload = function(){
    var ourData = ourRequest.responseText;
    console.log(ourData[0]);
}
*/