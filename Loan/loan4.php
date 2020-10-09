<?php
    define('DBINFO','mysql:host=localhost;dbname=loan_table');
    define('DBUSER','Pavitra');
    define('DBPASS','1234567890');
    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    function fetchAll($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
?>