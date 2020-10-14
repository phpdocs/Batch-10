<?php
    /**
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Assignment Operators
     * Date: 14th Oct 2020
     * Link: https://phpdocs.com/php/assignment-operators
     */

     //Create Variable
     $a=10;
     $b=5;

     //Create BR Constant
     define("BR","<br />");

     //Basic Assignment Operator
     echo "<h1>Basic Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a=$b;
     echo "\$a=\$b= ".$a.BR;

     //Addition Assignment Operator
     echo "<h1>Addition Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a+=$b;
     echo "\$a+=\$b= ".$a.BR;

     //Subtraction Assignment Operator
     echo "<h1>Subtraction Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a-=$b;
     echo "\$a-=\$b= ".$a.BR;

     //Multiply Assignment Operator
     echo "<h1>Multiply Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a*=$b;
     echo "\$a*=\$b= ".$a.BR;

     //Divide Assignment Operator
     echo "<h1>Divide Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a/=$b;
     echo "\$a/=\$b= ".$a.BR;

     //Modules Assignment Operator
     echo "<h1>Modules Assignment Operator</h1>";
     echo "\$a= ".$a.BR;
     echo "\$b= ".$b.BR;
     $a%=$b;
     echo "\$a%=\$b= ".$a.BR;

?>