<?php
    /**
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Introduction to Constant
     * Date: 13th Oct 2020
     * Link: https://phpdocs.com/php/constants
     */

     //Define Constant in PHP
     define("BR","<br />");
     
     
     echo "Hello, Welcome to PHPDocs.com".BR;
     echo "Here you will learn a lot of New Technologies".BR;

     //Wrong Effects of Variables
     $BreakLine="<br />";
     echo "Hello, Welcome to PHPDocs.com".$BreakLine;
     $BreakLine="";
     echo "Here you will learn a lot of New Technologies".$BreakLine;
     echo "Did you feel the Effect of Variable Change?";
    
?>