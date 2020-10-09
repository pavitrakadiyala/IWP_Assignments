<html>
<head>
<title> Login Details   </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{
background-color: lightpink;
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
    input[type=reset] {
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

<script type="text/javascript">

function validate()
{

var h=document.myform.id.value;
var d = /^[0-9][0-9][A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9]$/;


if (!h.match(d))
    {
      alert( "The Registartion  Number  is invalid!" );
      return false;
    } 
 
}
</script>

</head>  
<body>

<div class="container">
<h3 align="center"> Student Login </h3>
<form name="myform" onsubmit="return validate()" action="mt.php" method="post">
<table border=0 align="center" cellpadding="20" cellspacing=0 height=400 width=450>
<div class="input1">
<tr><td>Registration Number  :</td><td> <input type="text"  name="id" required></td> </div>
    <div class="input1">
<tr><td>Password :</td><td><input type="password" size="20" maxlength="40" name="tdate" required></td></tr> </div>
<div class="input1">
<tr><td><input type="submit" value="Register" class="btw" ></td>
<td><input type="reset" value="Reset" class="btw"></td></tr></form></div>
</table>
</div>
</body></html>