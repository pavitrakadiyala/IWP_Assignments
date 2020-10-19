
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
            $cid = $_POST['cid'];
            $_SESSION['cid'] = $_POST['cid'];  
            $query .= "SELECT * from `consumer_table`;";
            if(count(fetchAll($query)) > 0){ 
                    foreach(fetchAll($query) as $row){
                    if($row['cid']==$cid){
                        $_SESSION['custdisplay'] = true;
                        header('location:custdisplay.php');                      
                    }else{
                        echo "<script>alert('Wrong login details.')</script>";
                    }
                }
            }
        }
        ?>
        <center><h1>Enter the Customer Id  details</h1></center><br><br>
            <form name="myForm" method="POST" >
            <div class="form">
               <div class="inputfield">
                  <label>Customer ID  </label>
                  <input type="text" class="input" id="cid" name="cid" required >
               </div>  
               
              <div class="inputfield">
                <input type="submit" value="Submit" name="myForm" class="btn">
              </div>
             </div>
            </form>
            </div>
    </body>
</html>
