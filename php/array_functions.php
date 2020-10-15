<?php
    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Array Functions
     * Date: 15th Oct 2020
     * Link: https://phpdocs.com/php/array-functions
     * 
     */

          //Define HTML Constants
          define("BR","<br />");

          //Define Assoc Array
          $emp=array("Kashif","Qasim","Ali","Haider");
          $salary=array("Qasim"=>25000,"Ali"=>35000,"Kashif"=>20000,"Haider"=>23000);


          //Print an Array
          PrintArrayinPreFormat($salary);

          //Sort
          sort($emp);
          PrintArrayinPreFormat($emp);

          //Rsort
          rsort($emp);
          PrintArrayinPreFormat($emp);

          //Shuffle
          shuffle($emp);
          PrintArrayinPreFormat($emp);

          //Explode
	    $URL="phpdocs.com/php/variables";
	    $URL_array=explode('/',$URL); //divide the string into different parts on the base of forward slash (/)
        PrintArrayinPreFormat($URL_array);
        
        function PrintArrayinPreFormat($array){
            echo "<pre style='color:green'>";
            print_r($array);
            echo "</pre>";
        }

?>