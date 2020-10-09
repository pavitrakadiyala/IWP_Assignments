<?php
    session_start();
    include("loan4.php");
?>
<html>
    <head>       
        <title>Details </title>
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

.wrapper{
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
    <script>
   function f() {
    var array1 = [];
    var a = document.forms["myForm"]["cid"].value;
    if (a.length ==0) {
      alert("Customer ID should not be left empty!");
      e.preventDefault();
      array1.push("false");
      return false;
    } else {
      array1.push("true");
    }
    var b= document.forms["myForm"]["lid"].value;
    if (b.length ==0) {
      alert("Loan ID should not be left empty!");
      e.preventDefault();
      array1.push("false");
      return false;
    } else {
      array1.push("true");
    }

    if ((array1.includes("false"))) {
      // e.preventDefault();
      return false;
    } 
  }
  
</script>

    <?php
        if(isset($_POST['myForm'])){
            $cid = $_POST['cid'];
            $lid = $_POST['lid'];         
            
            $query = "SELECT * from `loan_table`;";
            if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                    foreach(fetchAll($query) as $row){
                    if($row['cid']==$cid && $row['lid']==$lid){
                        $_SESSION['cid'] = $row['cid'];
                        header('location:loan3.php');   
                    }
                    else{
                        echo '<script> alert("Wrong login details.")</script>';
                    }
                }
            }

        }
        ?>
        <center><h1>BANK LOAN MANAGEMENT</h1></center><br><br>        
        <div class="wrapper">
            <h2>LOGIN</h2>
            <form name="myForm" method="POST" >
            <div class="form">
               <div class="inputfield">
                  <label>Customer Id:  </label>
                  <input type="text" class="input" id="title" name="cid" >
               </div>  
               <br>
              <div class="inputfield">
                  <label> Loan Id: </label>
                  <input type="text" class="input" id="isbn" name="lid" >
               </div>  
               <br><BR>
              <div >
                  <label class="check">
                    <input type="checkbox" required>Agreed to terms and conditions
                    <span class="checkmark"></span>
                  </label>                  
               </div> 
               <br><br>
              <div>
                <input type="submit" value="View Loan" name="myForm" class="btn" onclick="f()">
              </div>
              <br>
              <a href="loan.php"> Go Back </a><br><br>
            </div>
            </form>
        </div>	
    </body>
</html>