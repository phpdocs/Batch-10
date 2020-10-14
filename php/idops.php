<?php
    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Increment & Decrement Operators
     * Date: 14th Oct 2020
     * Link: https://phpdocs.com/php/increment-decrement-operators
     * 
     */

     //Define Variable with value
     $a=20;
     
     #Define HTML Tags Constant
     define("BR","<br />");
     define("H1O","<h1>");
     define("H1C","</h1>");

     echo H1O."Real Value of \$a=".$a.H1C;

     //Pre Increment Operator
     echo H1O."Pre Increment Operator".H1C;
     echo ++$a.BR; //Output will be 21


     //Post Increment Operator
     echo H1O."Post Increment Operator".H1C;
     echo $a++.BR; //Output will be 21


     //Pre Decrement Operator
     echo H1O."Pre Decrement Operator".H1C;
     echo --$a.BR; //Output will be 21

     //Post Decrement Operator
     echo H1O."Post Decrement Operator".H1C;
     echo $a--.BR; //Output will be 21


     //Final Value;
     echo H1O."Final Value of \$a=".$a.H1C;




?>