<!DOCTYPE html>
<html>

<style>
html, body{
margin: 0px;
padding: 0px;
}
body{
background-image: url("isee.jpg");
}
#nav{
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: black;
color: white;

}

#bar{
float: left;
padding-bottom: 100%;
border-color: black;
background-color: black;
display:inline-block;
margin: 0;

}

#pic{
float: left;
border: 5px solid black;

}

#lll{
float: left;
color: white;
}

li a{
display: block;
padding: 8px;
color: white;


}

#space{
padding-left: 180px;
}

a:hover {
  background-color: grey;
  }
  
h1{
padding-left: 10px;
}

.active{
background-color: green;
}

.inactive{


}

</style>

<head>

<title>Pongos Site</title>
<h1>Pongos, Ichiro Emmanuel</h1>
</div>

</head>




<body>
<div id="bar">
<img id="pic" src="Picture.jpg" alt="Picture of Ichiro Emmanuel Pongos" width="150" >
</div>
<ul id="nav">

  <li class= "inactive" id="lll"><a onclick="homepage()">Goals</a></li>
  <li class="active" id="lll"><a href="#about">About Me</a></li>
  <li class="inactive" id="lll"><a href="resource.php">Resources</a></li>
  <li class="inactive" id="lll"><a href="Act1.php">Script1Act</a></li>
  <li class="inactive" id="lll"><a href="Act2.php">Script2Act</a></li>
  <li class="inactive" id="lll"><a href="Act3.php">Script3Act</a></li>
</ul>

<div>
 
</div>

<div id="space">
<h1 id="about">About me</h1>
<p>I am currently 20 year's old and a year 2 student in <em>Asia Pacific College</em> enrolled on the section <strong>BSIT-MI221</strong>.</p>
<p>I chose this course because I want to learn more about how to create my own webpages to improve<br>
	my portfolio and apply them on my future potential jobs.</p>

<p> Currently applying a Public School Scholarship to help me when it comes to the school tuition<br> </p>

<h2>IT Experience: Programming</h2>
<ul> 
<li>C</li> 
<li>Python</li>
<li>Java</li>
</ul>

<h2> Hobbies / Interests</h2>
<ol>
<li>Drawing Digital Art</li>
<li>Playing Video Games</li>
<li>Making recorded videos and editing them</li>
</ol>

<h2 id="goals">Goals in life</h2>
<p>My goals in life right now as a student is to finish school and focus on my career</p>

<p>I want to earn the things I want to accomplish that's possible with my current capabilities and wish to improve them</p>
</div>


</body>

<script>
      


//Home, a photo galary --


function homepage(){
document.getElementById ("about").addEventListener;
document.getElementById("about").innerHTML = "Hey";

}


//About Me--

//Resources--

	}
</script>
</html>