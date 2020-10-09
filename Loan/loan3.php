<?php 
    include("loan4.php");
    session_start();   
?>

<html>
	<head>
        <title> Loan Details</title>
         <style type="text/css">
body{
background-color: lightblue;
}
h2{
text-align:center;
}

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
	  <br>
	  <br>
      <br>            
      <?php            
            $cid = $_SESSION['cid'];           
            $query = "select * from `loan_table` where `loan_table`.`cid` = '$cid'; ";         
            
            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){

                    ?>
                    <div class="wrapper">                                
                    <div>
                    Loan Details
                    </div>
                    <form name="Form" method="POST"  >
                    <div class="form">
                    <div >
                       Loan ID: <?php echo $row['lid'];?>                       
                    </div> 
                    <div >
                       Customer ID: <?php echo $row['cid'];?>
                    </div> 
                    <div >
                       Loan Type : <?php echo $row['loan_type'];?>
                    </div> 
                    <div >
                       Loan Amount : <?php echo $row['loan_amount'];?>
                    </div> 
                    <div >
                       Opening Date : <?php echo $row['opening_date'];?>
                    </div> 
                    <div>
                       Status : <?php echo $row['status'];?>
                    </div>   

                    <div>
                       Loan Tenure : <?php echo $row['tenure'];?>
                    </div> 
                    <div >
                    <select name="tenure" id="tenure">
                    <option value="3">3</option>
                    <option value="6">6</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="22">22</option>
                    <option value="24">24</option>
                    </select>
        
                    </div>  
                    <div >
                       EMI : <?php echo $row['emi'];?><br>
                      
                    </div>           

                    <div >
                        
                        <input type="text" class="input" id="emi" name="emi" >
                    </div>               
                    <div >
                    <label class="check">
                    <input type="checkbox" required>Agreed to terms and conditions
                    <span class="checkmark"></span>
                  </label>
                  <p></p>
                   </div>                
                  <div class="inputfield">
                   <input type="submit" value="Update Details" name="Form" class="btn" onclick="f()">
                  </div>
                  <a href="loan5.php"> Log Out</a><br><br>
                   
                    </div>
                    </form>
                    </div>
                    <script>
        function f() {
            var array = [];
            var a = document.forms["Form2"]["emi"].value;
            if (a < 1000 || a > 10000) {
                alert("EMI should be between 1000 to 10,000");
                f.preventDefault();
                array.push("false");
                return false;
            } else {
                array.push("true");
            }})
        </script>
                    <?php   
                    if(isset($_POST['Form'])){     

                    $emi = $_POST['emi'];
                     $tenure = $_POST['tenure'];
                         
                    $query = "select * from `loan_table` where `loan_table`.`cid` = '$cid'; ";
                    $status = "New";
                    if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                                     foreach(fetchAll($query) as $row){
                                     if($row['status']==$status){  
                                         if(performQuery($query)){
                                             echo "<script>alert('Updated ')</script>";
                                             
                                         }else{
                                             echo "<script>alert('Try Again ')</script>";
                                         }   
                                         
                                     }
                                     else{
                                         echo "<script>alert('Cannot Update as your Loan is Completed')</script>";
                                     }
                                 }
                             }
 
                            }
                         ?>
                <?php
                        }
                    }else{
                        echo "No Previous Records ";
                    }
                ?>
	 
	</body>
</html>