<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resume</title>
<style type="text/css">
body{
background-color: lightblue;
}
h2{
text-align:center;
}
.ok{
    font-family: "Times New Roman", Times, serif;
    border-style: solid;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    background-color: lightpink;
    border-radius: 25px; 
    padding-top:30px;
    padding-bottom:30px;
    padding-left:30px;
    padding-right:30px;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 450px;
    margin-left: 450px;
 }
h3{
    text-align:center;  
}
</style>
</head>
<body>
<div class="ok">
<?php
if (isset($_POST['submit']))
{
$name=$_POST["name"];
// $age=$_POST["age"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$ed=$_POST["ed"];
$add=$_POST["add"];
$interest=$_POST["interest"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$date=date('Y')-date('Y',strtotime($dob));
$index = strpos($email, "@");
$first = substr($email, 0, $index);
$compare=strcmp($name,$first);
echo "<h2>Hi: ".strtoupper($name) ."</h2><br>";
echo "<h2>Your email name: ".$email. "</h2>";
echo "<h3 class='age'>AGE: ".$date."</h3><br>";
echo "<h2>Gender: ".strtoupper($gender) ."</h2><br>";
echo "<h2>Address: ".strtoupper($add) ."</h2><br>";
echo "<h2>Interest: ".strtoupper($interest) ."</h2><br>";
echo "<h2>Education: ".strtoupper($ed) ."</h2><br>";
echo "<h2>Date of birth: {$dob}<h2><br>";
echo "<h2>Number: {$mob}<h2><br>";
}
?>
</div>
</body>
</html>