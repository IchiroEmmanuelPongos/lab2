<!DOCTYPE html>
<html>

<style>



</style>

<head>

<title>Resources</title>
<h1>Pongos, Ichiro Emmanuel</h1>

</head>
<body>


<h2>Normal Button</h2>

<h4>Date Today</h4>
<p id ="dta"></p>

<p id="demo">JavaScript can change HTML content.</p>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Made you click"'>Click Me!</button>

<button type="button" onclick='document.getElementById("demo").innerHTML = "can change HTML content."')>Reset!</button>

<button type="button" onclick="NDate()")>Date!</button>


<h3>Counter</h3>
<p id="Number">0</p>

<button type="add" onclick="minusone()">-1</button>
<button type="minus" onclick="plusone()">+1</button>
<button type="reset" onclick="reset()">Reset</button>
<button type="check" onclick="checkNum()">"Below 10?"</button>

<p id="checkif">None</p>

<p> Use counter above Red  1 Orange  2 Yellow  3.</p>

<p id="ArrayTest"></p>

<button id ="many" onclick ="ReadArray()"> ArrNum </button>

<h2> Example.com </h2>

<a href="index.php">Back</a></li>
</body>


<script>

function NDate(){
const dta = new Date();
document.getElementById("demo").innerHTML = dta;
}


var Number = 0;
function plusone(){

Number = Number + 1;
document.getElementById("Number").innerHTML = Number;
}
function minusone(){

Number = Number - 1;
document.getElementById("Number").innerHTML = Number;
}

function reset(){

Number = 0;
document.getElementById("Number").innerHTML = Number;
}

function checkNum(){

x = document.getElementById("Number").innerHTML = Number;
document.getElementById("checkif").innerHTML = Boolean(x < 10);
}

function ReadArray(){
let Colors = ['black','red','orange','yellow'];

x = Number;
document.getElementById("ArrayTest").innerHTML = Colors[x];
}



</script>
</html>