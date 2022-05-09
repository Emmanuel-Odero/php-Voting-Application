<?php
include './config/connect-db.php';
    if (isset($_POST['username'])) {
        # code...
        //$firstName = $_POST['firstName'];
       // $surName = $_POST['surName'];
        $voterID = $_POST['surName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="SELECT * FROM voters where voterID='".$voterID."' AND 
        email='".$email."' AND password='".$password."' LIMIT 1";

        $result=mysql_query($sql);
        if(mysql_num_rows($result)==1){
            echo "Logged in";
            exit();
        }else{
            echo "Incorrect Details";
            exit();
        }
    }
?>