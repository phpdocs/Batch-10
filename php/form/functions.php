<?php
    //Common Functions for Form Handling
    function check_input($value){
        $value=trim($value); //remove the unwanted spaces
        $value=stripslashes($value); //remove the slashes
        $value=htmlspecialchars($value); //convert tags into special character format like from  < tag to < 
        return $value;
    }
?>