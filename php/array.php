<?php

    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Introduction to Arrays
     * Date: 15th Oct 2020
     * Link: https://phpdocs.com/php/array
     * 
     */

     //Define Constants & Array
     define("BR","<br />");

     //Define Array with array Method
     $color=array("Black","White","Green","Red","Yellow","Orange","Pink","Brown");

     //Another Method to define Array
     $fruit[1]="Apple";
     $fruit[2]="Orange";
     $fruit[3]="Mango";
     $fruit[4]="Corn";
     $fruit[5]="Guava";

     //Manually Print the Array
     echo "<h1>Print the Array Manually</h1>";
     echo $color[0].BR;
     echo $color[1].BR;
     echo $color[2].BR;
     echo $color[3].BR;

     //Automated Print Array
     echo "<h1>Print the Array using Loops</h1>";
     echo "<ul>";
     for($a=0;$a<count($color);$a++){
         echo "<li>".$color[$a]."</li>";
     }
     echo "</ul>";


     //Print the manually Index Array
     echo "<h1>Print the Manually Index Array using While Loop</h1>";
     $array_counter=1;
     while($array_counter<=count($fruit)){
         echo $fruit[$array_counter].BR;
         $array_counter++;
     }





?>