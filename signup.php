<html>
<link rel="icon" type="images/png" href="./new logo/icon.jpg">
<head> 
<title>Sign up</title>

<style>
body{
	font-family: Arial, Helvetica, sans-serif;
	background-color:#ECFDCE;
}
.main-content{
	background-color:#ECFDCE  ;
}
#logo{
	width: 300px;

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

  /*bar*/
* {
  box-sizing: border-box;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  border-style:dotted;
	border-radius:12px;
    border-color:#15993A;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<div class="main-contnat"> <!-- main page-->
<img id="logo"  src="./new logo/logo.png">  <!--add logo-->
<a href="Fitness and Health.html"><img id="home" src="home22.JPEG" width="50" height="50" ></a>
<header>
            <div class="bar">
              <a href="aboutus.html">About</a>
              <a href="Sports.html">Sports</a>
              <a href="HealthyFood.html">Healthy Food</a>
              <a href="Exercises.html">Exercises</a>
              <a href="Weight.html">Weight</a>
              <a href="doctoradvice.html">Doctor Advice</a>
            
        </div>
        </header>

<form id="regForm" action="insert.php" method="POST">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name & Email:
    <p><input placeholder="Username..." oninput="this.className = ''" name="Username"></p>
    <p><input placeholder="Email..." oninput="this.className = ''" name="Email"></p>
  </div>
  <div class="tab">Password:
    <p><input placeholder="Password..." oninput="this.className = ''" name="Password" type="password"></p>
    <p><input placeholder="Confirm..." oninput="this.className = ''" name="confirm" type="password"></p>
  </div>
  <div class="tab">Height & weight:
     <p><input placeholder="Weight..." oninput="this.className = ''" name="weight"></p>
     <p><input placeholder="Height..." oninput="this.className = ''" name="height"></p>
    <p>Gender:<label><input type="radio" name="Gender" value="m"/>Male</label>
                 <label><input  type="radio" name="Gender" value="f"/>female</label></p>
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>