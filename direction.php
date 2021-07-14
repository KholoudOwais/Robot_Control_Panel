<!DOCTYPE html>
<?php 
ob_start();
	//require 'validator.php';
   include 'config.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-----------------------------START CSS----------------------------->


</head>
<body>
<?php

$sql = "SELECT direction FROM robot_base WHERE id=0";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<br><br><br><br><br><br><br><br><center><font style='font-size:200px; color:hsl(202, 95%, 34%);'>" . $row["direction"] . "</font></center>" ; 
}
}



mysqli_close($conn);
?>
</body>
</html>