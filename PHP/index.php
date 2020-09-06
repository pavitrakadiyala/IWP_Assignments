<!DOCTYPE html>
<html>
<head>
 <title>Vehicle Details</title>
 <style type="text/css"> 
 body{
    background-color: lightblue;
 }
 .ok{
    font-family: "Times New Roman", Times, serif;
    border-style: solid;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 25px; 
    background-color: white;
    padding-top:30px;
    padding-bottom:30px;
    padding-left:30px;
    padding-right:30px;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 450px;
    margin-left: 450px;
 }
 .phpok{
    font-family: "Times New Roman", Times, serif;
    border-style: solid;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 25px; 
    background-color: white;
    padding-top:30px;
    padding-bottom:30px;
    padding-left:30px;
    padding-right:30px;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 450px;
    margin-left: 450px;
 }
 body{
    line-height: 1;
    margin: 0;
    font-family: Geometria;
}
label{
    font-size: 20px;
    font-weight: bold;
    line-height: 1;
}
input[type=submit] {
    background-color: rgb(0, 33, 95);
    color: white;
    padding: 10px 50px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    display: block;
    margin: auto;
    font-family: Geometria;
    }

 </style>
</head>
<body>
 <h1 style="text-align: center;"><u>TOLLBOOTH</u></h1> 
 <div class='ok'>
 <form action="index.php" method="POST" style="text-align:
center;">
<label for="Vehicle">Vehicle Type: </label>
<select name="Vehicle" id="Vehicle" required>
  <option value="A">Car, Jeep, Van, Light Motor Vehicle and Motorised Three wheelers</option>
  <option value="B">Light commercial Vehicles, Light Goods Vehicle, Mini bus</option>
  <option value="C">Truck/Bus(Two Axles)</option>
  <option value="D">Three Axle Commercial Vehicle</option>
</select>
 <br>
 <br>
 <label for="int">Vehicle Number: </label>
 <input type="text" name="int" maxlength="10" required>
 <br>
 <br>
 <label for="way">Mode: </label>
<select name="way" id="way" required>
  <option value="One">One</option>
  <option value="Two">Two</option>
</select>
<br>
<br>
 <label for="date">Date of Travel: </label>
 <input type="Date" name="date" required>
 <br>
 <br>
 <input type="submit" name="submit" value="Calculate">
 </div>
 </form> 
 <br>
 <br>
 <div class='phpok'>
 <center>
 <?php 
 if(isset($_POST['Vehicle'], $_POST['int'], $_POST['way'], $_POST['date']))
{
$V=$_POST['Vehicle'];
echo "Vehicle Tye: {$V}";
echo "<br>";
$num=$_POST['int'];
echo "Vehicle Number: {$num}";
echo "<br>";
$way=$_POST['way'];
echo "Mode: {$way}";
echo "<br>";
$date=$_POST['date'];
echo "Date of Travel: {$date}";
echo "<br>";
if($way == 'One'){
if ($V == 'A') {
    echo "Fare Details: 38";
  } elseif ($V == 'B') {
    echo "Fare Details: 60";
  } elseif ($V == 'C') {
    echo "Fare Details: 111";
  }
  else{
      echo "Fare Details: 137";
  }
}
else{
    if ($V == 'A') {
        echo "Fare Details: 76";
      } elseif ($V == 'B') {
        echo "Fare Details: 120";
      } elseif ($V == 'C') {
        echo "Fare Details: 222";
      }
      else{
          echo "Fare Details: 274";
      }
}
}
else{
    echo "ENTER ALL THE DATA!";
}
 ?>
 </div>
</center>
</body>
</html> 