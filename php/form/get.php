<?php

    /**
     *      Get Form Values BY
     *              GET
     *             Method
     */

     if(isset($_GET['Submit'])){
        require_once("functions.php");
        $UserName=check_input($_REQUEST['txtUserName']);
        $Password=check_input($_REQUEST['txtPassword']);

        echo "<h1>UserName= $UserName</h1>";
        echo "<h1>Password= $Password</h1>";
     }else{
         echo "There is no Form Submission.";
     }

?>