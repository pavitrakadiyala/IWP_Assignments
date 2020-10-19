
<?php
    session_start(); 
    include("functions.php");
    $cid = $_SESSION['cid'];
?>
<html>
    <head>      
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
body{
background-color: lightblue;
}
label{
    font-size: 20px;
    font-weight: bold;
    line-height: 1;
}
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

</style>
    </head>
    <body>
    <div class="box">
          <?php                
                $query = "select * from `consumer_table`  where cid= '$cid'    ";                
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){    
                        ?>
    <center>
                <div id="req">                           
                                    <br><br>
                                    <h2>Customer Name:<b><?php echo $row['cname'] ?></b></h4> 
                                    <p>Connection Type:<?php echo $row['ctype'] ?></p> 
                                    <p>Connection Id:<?php echo $row['cid'] ?></p> 
                        </div>
                    <?php
                            }
                        }
                    ?>
                    <?php
                $query1 = "select * from `book_table`  where cid= '$cid'    "; 
                if(count(fetchAll($query1))>0){
                    foreach(fetchAll($query1) as $row){    
                        ?>    
                <div id="req">
                                    <p>Booking Id: <?php echo $row['bid'] ?></p> 
                                    <p>Delivery Status:<?php echo $row['dstaus'] ?></p>  
                        </div>
                    <?php
                            }
                        }
                    ?>
</center>
</div>
    </body>
</html>