<?php
    session_start(); 
    include("functions.php");
?>
<html>
    <head>       
        <title>Login </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
body{
background-color: lightblue;
}
h2{
text-align:center;
font-size: 20px;
    font-weight: bold;
    line-height: 1;
}
label{
    font-size: 20px;
    font-weight: bold;
    line-height: 1;
}
input[type=text], select, textarea {
 padding: 10px;
 border: 1px solid rgb(192, 192, 192);
 border-radius: 4px;
 box-sizing: border-box;
 margin-top: 6px;
 margin-bottom: 10px;
 resize: vertical ;
 background-color: rgb(233, 233, 233);}

.box{
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
    text-align:center;
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
    <div class="box">
    <?php        
        if(isset($_POST['myForm'])){            
            $bid = $_POST['bid'];
            $cid = $_POST['cid'];
            $dstatus = $_POST['dstatus'];          
            $query = "INSERT INTO `book_table` ( 'bid','cid','dstaus' ) VALUES (  '$bid', '$cid', '$dstatus')";
            if(performQuery($query)){
                echo "<script>alert('Successfully Registred ')</script>";
            }else{
                echo "<script>alert('Unknown error occured or Bill Id  is already registred')</script>";
            }
        }
        ?>
        <center><h1><u>Enter the Booking details:</u></h1></center><br><br>
            <form name="myForm" method="POST" >
            <div class="form">
               <div class="inputfield">
                  <label>Booking ID:  </label>
                  <input type="text" class="input" id="bid" name="bid" required >
               </div>  
              <div class="inputfield">
                  <label> Customer ID: </label>
                  <input type="text" class="input" id="cid" name="cid" required>
               </div>  <div class="inputfield">
               <label>Status:</label> 
               <select name="dstatus" id="dstatus">
                    <option value="DEL">Delivered</option>
                    <option value="NYD">Not Yet Delivered </option>
                    <option value="DEY">Delayed </option>
                    </select> </div>              
              <div class="inputfield">
                <input type="submit" value="Submit" name="myForm" class="btn">
              </div>
              </div>
            </form>
        </div>	
        </div> 
    </body>
</html>
