<?php include 'header.php'; ?>
<style>
    #myTitle{
        margin-bottom: 20px;
    }
    #theList {
        margin-top: 30px;
    }
    #theList li {
        border-bottom: 1px solid #ccc;
        line-height: 40px;
        height: 40px;
    }
    .active {
        background-color: antiquewhite;
    }
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <h1 id="myTitle">Just Title</h1>
            
            <a id="ourButton" href="#" class="btn btn-primary">Add List</a>
            
            <ul id="theList">
                <li>Something to Eat</li>
                <li>Find cat in the backyard</li>
                <li>New Dish with Lobster</li>
                <li>Still Have Banana for Dinner</li>
                <li>Working for Future Live</li>                
            </ul>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
 var newItemCounter = 1;
 var ourList = document.getElementById("theList");
 var ourButton = document.getElementById("ourButton");
 var myTitle = document.getElementById("myTitle");
 var theList = document.getElementById("theList").getElementsByTagName("li");
    

    ourList.addEventListener("click", activateItem);
    
    
    function activateItem(e){
        if(e.target.nodeName == "LI") {
            myTitle.innerHTML = e.target.innerHTML;
            for (i = 0; i < e.target.parentNode.children.length; i++){
                e.target.parentNode.children[i].classList.remove("active");
            }
            e.target.classList.add("active");
        }
    }

 ourButton.addEventListener("click", createNewItem);
    
 function createNewItem(){

     ourList.innerHTML += "<li>Something New " + newItemCounter + "</li>";
     newItemCounter++;
 }    
    
</script>