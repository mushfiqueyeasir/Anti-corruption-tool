<!DOCTYPE html>
<html> 
<head>
	<title>Home</title>
</head>
<style>
	h1{
		font-family: 'Comic Sans MS', cursive;
		padding-top: 100px;
		text-align: center;
		 color: white;
		 width: 50%;
  		border: 1px solid black;
	  }
	p{
		text-align: justify;
		font-family: 'Comic Sans MS', cursive;
		padding-left: 40px;
		color: white;
		width: 50%;
  		border: 1px solid black;
	}
	 
	html{
        background-image: url(image/home.png);
         }


.button{
  background-color: #4CAF50;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 20px;  
  cursor: pointer;
  transition: all 0.5s;
}
.button11 {background-color: #FF0000;padding: 15px 32px;margin: 10px 20px;} 
.button1 {background-color: #4CAF50;padding: 15px 32px;margin: 10px 20px;} 
.button2 {background-color: #008CBA;padding: 15px 64px;margin: 40px 450px;} 

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>


	<h1>NID Based Anti-Corruption Tool</h1> <br>
	


<button id="change" class="button button11" ><span>Connect NID Database</span></button><br>
<button id="change1" class="button button11"><span>Connect Bank Database</span></button>
<button id="change2" class="button button11" style="display:none;" ><span>Connect Bank Transaction Database</span></button><br>
<button id="change3" class="button button11"><span>Connect Utility Database</span></button>
<button id="change4" class="button button11" style="display:none;"><span>Connect Utility Bill Database</span></button><br>
<button id="change5" class="button button11"><span>Connect Land Properties Database</span></button><br>
<button id="change6" class="button button11"><span>Connect Tax Database</span></button>
<button id="change7" class="button button11" style="display:none;"><span>Connect Tax History Database</span></button><br>


<a href="analyze.php">
<button id="start" class="button button1" style="display:none;" ><span>Start Analyze</span></button>
</a>

<a href="index.php">
<button class="button button2"><span>Exit</span></button>
</a>
	
<script src="script.js"></script>
</body>
</html>