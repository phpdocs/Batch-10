<?php
    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Introduction to Loops
     * Date 15th Oct 2020
     * Link: https://phpdocs.com/php/for-loop
     * 
     */


     //Define Constants
     define("BR","<br />");

     //For Loop
     for($a=11;$a>=1;$a--){
        echo $a.BR;
     }

     
     //While Loop
     echo "<h1>While Loop</h1>";
     $Counter=1;
     while($Counter<=5){
         echo $Counter.BR;
         $Counter++;
     }

     //Do While Loop
     echo "<h1>Do While Loop</h1>";
     $Counter=0;
     do{
         echo $Counter.BR;
         $Counter++;
     }while($Counter<=5)
?>