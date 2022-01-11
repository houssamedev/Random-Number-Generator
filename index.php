<!doctype html>
<html>
<head>
<title>Dice Program</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="style.css" rel="stylesheet">
</head>
<body class="bg-gray-800">
<main class="container mx-auto min-h-screen flex flex-col justify-center content-center max-w-3xl space-y-4 bg-white shadow-md m-5 p-8 rounded-md">
<h1 class="text-black text-6xl text-center">
    Roll The Dice!
</h1>
<form class="container flex flex-col space-y-4">
<label class="text-black text-xl"> Number of dice to roll : </label>
<input class="border-2 border-gray-800  text-xl div-1 focus" type="text" id="roll" name="roll" size="10" value="">
<label class="text-black text-xl"> sides of the dice : </label>
<select name="side" id="side" class="border-2 border-gray-800  text-xl div-1">
        <option value="4">d4</option>
        <option value="6">d6</option>
        <option value="8">d8</option>
        <option value="10">d10</option>
        <option value="12">d12</option>
        <option value="20">d20</option>
      </select>
	  <input type="button" onclick = "ajaxFunction()" value="Roll" id="myBtn"  class="border-2 border-black text-black w-48 mx-auto  text-xl"/>
</form>
<div id="rslt">
</div>

<script>
 <!--
            //Browser Support Code
            function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('rslt');
					 console.log(ajaxRequest.responseText);
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var NbDice = document.getElementById('roll').value;
               var DiceFace = document.getElementById('side').value;
               var queryString = "?roll=" + NbDice ;
            
               queryString +=  "&side=" + DiceFace;
               ajaxRequest.open("GET", "router.php" + queryString, true);
               ajaxRequest.send(null); 
            }
         //-->
</script>

</main>
</body>
</html>