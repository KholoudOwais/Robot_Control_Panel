<!DOCTYPE html>
<?php
ob_start();
	//require 'validator.php';
   include 'config.php';
?>
<html>
<head>
  <title>Control Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-----------------------------START CSS----------------------------->

<style>

<!-----------------------------Responsive Web View----------------------------->

* {
  box-sizing: border-box;
}

<!-----------------------------Slider & Button----------------------------->

.slidecontainer {
  width: 50%;
}

.slider {
  -webkit-appearance: none;
  width: 20%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: hsl(202, 95%, 34%);
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: hsl(202, 95%, 34%);
  cursor: pointer;
}

.button {
  background-color:hsl(202, 95%, 34%); /* blue */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button {
  background-color: white; 
  color: black; 
  padding: 10px;
  border: 2px solid hsl(202, 95%, 34%);
  border-radius: 8px;
}

.button:hover {
  background-color:hsl(202, 95%, 34%);
  color: white;
}

hr {
  display: block;
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  width:42%;
}
</style>

<!-----------------------------END CSS----------------------------->

</head>
<body>


<!-----------------------------START HTML----------------------------->


<center>

<!-----------------------------START Robot Arm - Motors----------------------------->
<h1 style="color:rgb(85, 85, 85);">Control Panel</h1>

<hr style="margin-bottom: 2em;margin-top: 2em;"/>

<div  style="color:rgb(85, 85, 85);" class="container">
  <form id="myform"action="" method="POST">
  <div class="slidecontainer">
    <p> 
    <b>Motor1</b> 
    <input type="range" min="0" max="180" value='90' class="slider" name="myRange" id="myRange">
    <b>Angle:</b> <span id="demo" name="demo"></span>
  </p>
  </div>

  <div class="slidecontainer">
    <p>
    <b>Motor2</b>
    <input type="range" min="0" max="180" value="90" class="slider" id="myRange1" name="myRange1">
    <b>Angle:</b> <span id="demo1" name="demo1" ></span>
  </p>
  </div>

  <div class="slidecontainer">
    <p>
    <b>Motor3</b>
    <input type="range" min="0" max="180" value="90" class="slider" id="myRange2" name="myRange2">
    <b>Angle:</b> <span id="demo2" name="demo1"></span>
  </p>
  </div>

  <div class="slidecontainer">
    <p></span>
    <b>Motor4</b>
    <input type="range" min="0" max="180" value="90" class="slider" id="myRange3" name="myRange3">
    <b>Angle:</b> <span id="demo3" name="demo3">
    </p>
  </div>

  <div class="slidecontainer">
    <p>
    <b>Motor5</b>
    <input type="range" min="0" max="180" value="90" class="slider" id="myRange4" name="myRange4">
    <b>Angle:</b> <span id="demo4" name="demo4" ></span>
  </p>
  </div>

  <div class="slidecontainer">
    <p>
    <b>Motor6</b>
    <input type="range" min="0" max="180" value="90" class="slider" id="myRange5" name="myRange5">
    <b>Angle:</b> <span id="demo5" name="demo5" ></span>
    </p>
  </div>

  <input class="button button" type="submit" name="submit1" value="Save">
  <input class="button button" type="submit" name="submit2" value="Run"> 
  <input class="button button" type="submit" name="submit3" value="Stop">
  <input class="button button" type="reset" name="submit4" value="Reset">
</form>


<!-----------------------------END Robot Arm - Motors----------------------------->

<hr/>

<!-----------------------------START Robot Base - Directions----------------------------->

<form id="myform2" action="" method="POST">

<input class="button button" style="padding: 12px 34px; margin-left:10px;" type="submit" name="top" value="Top">
<br>
<input class="button button" style="padding: 12px 30px; margin-left:20px; margin-right:10px;" type="submit" name="left" value="Left" >
<input class="button button" style="padding: 12px 30px;margin-right:10px;margin-top:10px;margin-bottom:10px;" type="submit" name="stop" value="Stop">
<input class="button button" style="padding: 12px 30px;"type="submit" name="right" value="Right">
<br>
<input class="button button" style="padding: 12px 21px;margin-left:10px;" type="submit" name="bottom" value="Bottom">

</form>

<!-----------------------------END Robot Base - Directions----------------------------->
</div>

</center>

<!-----------------------------END HTML----------------------------->


<!-----------------------------START JS----------------------------->

<script>
var slider = document.getElementById("myRange");
var slider1 = document.getElementById("myRange1");
var slider2 = document.getElementById("myRange2");
var slider3 = document.getElementById("myRange3");
var slider4 = document.getElementById("myRange4");
var slider5 = document.getElementById("myRange5");

var output = document.getElementById("demo");
var output1 = document.getElementById("demo1");
var output2 = document.getElementById("demo2");
var output3 = document.getElementById("demo3");
var output4 = document.getElementById("demo4");
var output5 = document.getElementById("demo5");

output.innerHTML = slider.value;
output1.innerHTML = slider1.value;
output2.innerHTML = slider2.value;
output3.innerHTML = slider3.value;
output4.innerHTML = slider4.value;
output5.innerHTML = slider5.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
slider1.oninput = function() {
  output1.innerHTML = this.value;
}
slider2.oninput = function() {
  output2.innerHTML = this.value;
}
slider3.oninput = function() {
  output3.innerHTML = this.value;
}
slider4.oninput = function() {
  output4.innerHTML = this.value;
}
slider5.oninput = function() {
  output5.innerHTML = this.value;
}
</script>

<!-----------------------------END JS----------------------------->

<!-----------------------------START PHP----------------------------->

<!-----------------------------START Robot Arm - Motors----------------------------->

<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

if(isset($_POST['submit1']))
{
  

$sql = " UPDATE motor_angle SET motor1='".$_POST["myRange"]."', motor2='".$_POST["myRange1"]."',
motor3= '".$_POST["myRange2"]."', motor4='".$_POST["myRange3"]."', motor5='".$_POST["myRange4"]."', motor6='".$_POST["myRange5"]."', run = 0 ";

if(mysqli_multi_query($conn, $sql)) {
    echo "<br><center style='color:hsl(202, 95%, 34%);'>Saved successfully<center>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
if(isset($_POST['submit2']))
{
  $sql2="UPDATE motor_angle set run = 1 where run=0";
  if(mysqli_multi_query($conn, $sql2)) {
    echo "<br><center style='color:hsl(202, 95%, 34%);'>Run successfully<center>";
  } else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }
   
  }
  if(isset($_POST['submit3']))
{
  $sql3="UPDATE motor_angle set run = 0 where run=1";
  if(mysqli_multi_query($conn, $sql3)) {
    echo "<br><center style='color:hsl(202, 95%, 34%);'>Stopped successfully<center>";
  } else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  }
   
  }
//-----------------------------END Robot Arm - Motors----------------------------->

//-----------------------------START Robot Base - Directions----------------------------->

if(isset($_POST['top']))
{
  $top_sql = " UPDATE robot_base SET direction = 'TOP' WHERE id=0";
  mysqli_multi_query($conn, $top_sql);
}
if(isset($_POST['bottom']))
{
  $bottom_sql = " UPDATE robot_base SET direction = 'BOTTOM' WHERE id=0";
  mysqli_multi_query($conn, $bottom_sql);
}
if(isset($_POST['left']))
{
  $left_sql = " UPDATE robot_base SET direction = 'LEFT' WHERE id=0";
  mysqli_multi_query($conn, $left_sql);
}
if(isset($_POST['right']))
{
  $right_sql = " UPDATE robot_base SET direction = 'RIGHT' WHERE id=0";
  mysqli_multi_query($conn, $right_sql);
}
if(isset($_POST['stop']))
{
  $stop_sql = "UPDATE robot_base SET direction = 'STOP' WHERE id=0";
  mysqli_multi_query($conn, $stop_sql);
}

//-----------------------------END Robot Base - Directions----------------------------->

$conn->close();

?>

<!-----------------------------END PHP----------------------------->


</body>
</html>
