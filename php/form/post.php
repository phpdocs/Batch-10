<?php

    /**
     *          Get Values By 
     *              POST
     *             Method
     */
    
     if(isset($_POST['Submit'])){
        require_once("functions.php");
        $UserName=check_input($_POST['txtUserName']);
        $Password=check_input($_POST['txtPassword']);

        echo "<h1>UserName= $UserName</h1>";
        echo "<h1>Password= $Password</h1>";
     }else{
         echo "There is no Form Submissions";
     }
?>