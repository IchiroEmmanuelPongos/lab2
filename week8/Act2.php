<!DOCTYPEmar html>
<html>

<style>
ul {
    list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
}

#border{
padding: 10px 10px 10px 10px;
float: 25%;
}
button{

border: 1px solid black;
background-color: black;
color: white;
font-size: 25px;
font-style: bold;
margin: 10px 10px 10px 10px;
border-radius: 10px;
curser: pointer;
text-align: center;
width: 50px;
height: 50px;
}
button:hover{
background-color: grey;
}
button:active{
background-color: black;
color: black;
}

#infoprompt{
margin-right: 20px;
border: 2px solid grey;
background-color: grey;
float: left;



}

#namebox{
float: left;
padding-right: 20px;
}

.bar{
border-color: black;
background-color: grey;
}

#tableinfo{
width: 70px;
height: 20px;
font-size: 15px;
}


</style>

<head>

<title>Resources</title>
<h1>Pongos, Ichiro Emmanuel</h1>



</head>
<body>
<div id="infoprompt">
<ul class="bar">
<li id="namebox"><p>First Name: <input id="FName"> </p>
<p>Last Name: <input id="LName"> </p>
<p>Middle Initial: <input id="MName" size="17px"> </p>
</li>
<li id="namebox">
<p>Age: <input id="age" size="2px"></p>
<p>Gender: <input id="gender"></p>

<!--Button Delay Aese TimeOut-->

<button id="tableinfo" onClick="setTimeout(GetInfo,3000);";>Submit</button>
</li >
<ul>
</div>


<p> Simple Input Calculator <p id="ans"></p></p>

<p id="info">Number 1:<input id="nom" size="10">Number 2:<input id="dem" size="10"></p>

<div id="border">
<button id="sum" onclick="add()">+</button>
<button id="minus" onclick="minus()">-</button>
<button id="times" onclick="times()">x</button>
<button id="divide" onclick="divide()">/</button>
<button id="clear" onclick="cl()">C</button></div>


<p id="ans"></p>

<p><a href="index.php">Back to Home</a></p>

<script>

// functions 18
function add(){

let n1 = Number(document.getElementById("nom").value);
let n2 = Number(document.getElementById("dem").value);
let ans = n1 + n2;
if(typeof ans == 'number'){
document.getElementById("ans").innerHTML = ans;
}else{
document.getElementById("ans").innerHTML = "invalid Input";
}
}
function minus(){

let n1 = Number(document.getElementById("nom").value);
let n2 = Number(document.getElementById("dem").value);
let ans = n1 - n2;
if(typeof ans == 'number'){
document.getElementById("ans").innerHTML = ans;
}else{
document.getElementById("ans").innerHTML = "invalid Input";
}
}
function times(){

let n1 = Number(document.getElementById("nom").value);
let n2 = Number(document.getElementById("dem").value);
let ans = n1 * n2;
if(typeof ans == 'number'){
document.getElementById("ans").innerHTML = ans;
}else{
document.getElementById("ans").innerHTML = "invalid Input";
}
}
function divide(){

let n1 = Number(document.getElementById("nom").value);
let n2 = Number(document.getElementById("dem").value);
let ans = n1 / n2;
if(typeof ans == 'number'){
document.getElementById("ans").innerHTML = ans;
}else{
document.getElementById("ans").innerHTML = "invalid Input";
}
}

function cl(){
document.getElementById("ans").innerHTML = "";
document.getElementById("nom").value = "";
document.getElementById("dem").value = "";
}

function GetInfo(){
// Objects 17
let person = {
fname:document.getElementById("FName").value,
lname:document.getElementById("LName").value,
mname:document.getElementById("MName").value,
age:document.getElementById("age").value,
gender: document.getElementById("gender").value
}
// Popup Alert Browser BOM
alert("Name: "+ person.lname + ", " + person.fname + " " + person.mname +"\nAge: "
+ person.age + "\nGender: " + person.gender);
};



</script>

</body>



</html>