<html>
<link rel="icon" type="images/png" href="./new logo/icon.jpg">
<head>
<link rel="stylesheet"type="text/css"href="login.css">
<title>Sign up</title>
<style>
body{
	
	font-family: Arial, Helvetica, sans-serif;
	background-color: #ECFDCE;
	
}
.main-content{
	
	
	background-color: #ECFDCE;
}

#logo{
	margin:0;
	width: 300px;
	margin-top:0;
	
}
#home{
	border-style:dotted;
	border-radius:12px;
    border-color:#B5F641;
	margin-left:95%;
	
}
/*bar*/
header{
    background-color: #35470D;
    height: 8%;
    background-size: cover;
    background-position: center;
}
.bar a{
float: left;
color: white;
text-align:center;
padding:20px 70px;
text-decoration: none;
font-size: 17px;
}
.bar a:hover {
  background-color:#ECFDCE;
  color: black;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>


<div class="main-content">  <!-- background-->
<img id="logo"  src="./new logo/logo.png"><!--add logo-->
<a href="Fitness and Health.html"><img id="home" src="home22.JPEG" width="50" height="50" ></a>
<header>
            <div class="bar">
              <a href="aboutus.html">About</a>
              <a href="Sports.html">Sports</a>
              <a href="HealthyFood.html">Healthy Food</a>
              <a href="Exercises.html">Exercises</a><!--------------------اضيفي صفحتك هنا ----------->
              <a href="Weight.html">Weight</a>
              <a href="doctoradvice.html">Doctor Advice</a>
            
        </div>
        </header>
		<br>
		<br>
<center>
<p><h3> login or join with our healthy family..</h3></p> 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="log.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logo2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Passwordd" required>
        
      <button type="submit">Login</button>
      <label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">If you don't have an Account <a href="signup.php" >SIGN UP!</span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>

