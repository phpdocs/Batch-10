<?php
    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Arithmetic Operator
     * Date: 14th Oct 2020
     * Link: https://phpdocs.com/php/arithmetic-operations
     */

     //Define Variables
     $a=20;
     $b=10;
     $c=0;

     //Define HTML Constants
     define("BR","<br />");

     //Display Real Values
     echo "<h1>Real Values of Variables</h1>";
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     echo "\$c=".$c.BR;

     //Addition 
     echo "<h1>Addition Operator</h1>";
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a+$b;
     echo '$c=$a+$b ='.$c;

     //Subtraction
     echo "<h1>Subtraction Operator</h1>";
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a-$b;
     echo '$c=$a-$b ='.$c;

     //Division 
     echo '<h1>Division Operator</h1>';
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a/$b;
     echo '$c=$a/$b ='.$c;

     //Multiply 
     echo "<h1>Multiply Operator</h1>";
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a*$b;
     echo '$c=$a*$b ='.$c;

     //Modules 
     echo "<h1>Modules Operator</h1>";
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a%$b;
     echo '$c=$a%$b ='.$c;

     //Exponent  
     echo "<h1>Exponent Operator</h1>";
     $a=2;
     $b=3;
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;
     $c=$a**$b;
     echo '$c=$a**$b ='.$c;

?>