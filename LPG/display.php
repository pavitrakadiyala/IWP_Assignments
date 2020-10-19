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
            <div class="title">
              <h2><u>Customer Details </u></h2>
            </div>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                <?php
                $count1 = 0;
                $count2 = 0;
                $c = "DOM";            
            $query = "select * from `consumer_table`     ";            
            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){

                    if($row['ctype']==$c){
                        $count1 = $count1 + 1;
                    }
                    else{
                        $count2 = $count2 + 1;
                    }
                    ?>
            <div id="req">                       
                                <h4 id="pleft"><?php echo $row['cid'] ?>  <?php echo $row['ctype'] ?> <?php echo $row['cname'] ?></h4>                            
                    </div>
                <?php
                        }
                    }else{
                        echo "No Previous Records ";
                    }
                ?>
                 </div>
            </div>
            <br><br>
            <h4>Total Present Domestic Users: <?php echo $count1 ?></h4>
            <h4> Total Present Commercial Users: <?php echo $count2 ?></h4>              
        </div>	
    </body>
</html>
