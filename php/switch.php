<?php

    /**
     * Org: PHPDocs.COM
     * Author; Muhammad Afzal
     * Topic: Switch Statment in PHP
     * Date: 14th Oct 2020
     * Link: https://phpdocs.com/php/switch-control
     */

     $EnglishMarks=40;
     
     //Define Constant
     define("BR","<br />");

     //Switch For Grading
     switch($EnglishMarks){
         case $EnglishMarks<=40:
            echo "D Grade".BR;
         break;
         case $EnglishMarks<=50:
            echo "C Grade".BR;
         break;
         case $EnglishMarks<=60:
            echo "B Grade".BR;
         break;
         case $EnglishMarks<=70:
            echo "B+ Grade".BR;
         break;
         case $EnglishMarks<=80:
            echo "A Grade".BR;
         break;
         case $EnglishMarks<=90:
            echo "A+ Grade".BR;
         break;
         default:
            echo "You Are Fail";
     }

?>