<!DOCTYPE html>
<html>
<head>
<title>Resume</title>
<style type="text/css">
body{
background-color: lightpink;
}
label{
    font-size: 20px;
    font-weight: bold;
    line-height: 1;
}
.container{
    font-family: "Times New Roman", Times, serif;
    border-style: solid;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    background-color: lightblue;
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
<div class="container">
<h1 style="text-align: center;">IWP LAB ASSESMENT</h1>
<h1 style="text-align: center;">ENTER RESUME DETAILS</h1>
<form action="post.php" method="POST" onsubmit="return ValidateEmail()" style ="text-align:center;">
<label for="name">Name:</label>
<input type="text" name="name" id="name">
<br>
<br>
<label for="email" >Email:</label>
<input type="text" name="email" id="email">
<br>
<br>
<label for="dob">DOB:</label>
<input type="date" name="dob" id="dob">
<br>
<br>
<label for="nation">Nationality:</label>
<input type="text" name="nation" id="nation">
<br>
<br>
<label for="add">Address:</label>
<input type="text" name="add" id="add">
<br>
<br>
<label for="ed">Eductaion:</label>
<input type="text" name="ed" id="ed">
<br>
<br>
<label for="gender">Gender:</label>
<input type="text" name="gender" id="gender">
<br>
<br>
<label for="interest">Interest</label>
<input type="text" name="interest" id="interest">
<br>
<br>
<label for="mob">Mobile Number:</label>
<input type="number" name="mob" id="mob">
<br>
<br>
<br>
<input type="submit" name="submit" value="Generate">
</form>
<script type="text/javascript">
function ValidateEmail()
{
    var letters = /^[0-9]+$/;
var name = document.querySelector("#name").value;
var email = document.querySelector("#email").value;
var dob = document.querySelector("#dob").value;
var mob = document.querySelector("#mob").value;
var ed = document.querySelector("#ed").value;
var add = document.querySelector("#add").value;
var interest = document.querySelector("#interest").value;
var nation = document.querySelector("#nation").value;
var gender = document.querySelector("#gender").value;
if (name == "") {
alert("Please Enter your name")
return false;
}
if((name).match(letters)){
            alert("Sorry! Name Only letters!");
            return false;  
          } 
if (email == "") {
alert("Please enter the email address");
return false;
} else if (/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zAZ]{2,5})$/.test(email) == false) {
alert("Invalid Email address please try again");
return false;
}
if (Mob <= 0) {
alert("Please Enter Correct Mob");
return false;
}
if (!mob.match(letters))
               {
                 alert( "The Mobile Number should be a number!" );
                 return false;
               } 
if (dob == "") {
alert("Add Dob");
return false;
}
if (interest == "") {
alert("Add interest");
return false;
}
if (nation == "") {
alert("Add Education");
return false;
}
if((nation).match(letters)){
            alert("Sorry! Nationality Only letters!");
            return false;  
          } 
if (ed == "") {
alert("Add Education");
return false;
}
if (add == "" || ad=="null") {
alert("Add Address");
return false;
}
if (gender == "") {
alert("Add Gender");
return false;
}
if(!(gender).match(letters)){
            alert("Sorry! Gender Only letters!");
            return false;  
          } 
}
</script>
</body>
</html>
