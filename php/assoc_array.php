<?php
    /**
     * 
     * Org: PHPDocs.com
     * Author: Muhammad Afzal
     * Topic: Assoc Array
     * Date: 15th Oct 2020
     * Link: https://phpdocs.com/php/array
     * 
     */

     //Define HTML Constants
     define("BR","<br />");

     //Define Assoc Array
     $emp=array("Kashif","Qasim","Ali","Haider");
     $salary=array("Qasim"=>25000,"Ali"=>35000,"Kashif"=>20000,"Haider"=>23000);
     $age=array("Qasim"=>20,"Ali"=>30,"Kashif"=>25,"Haider"=>35);
     $location=array("Qasim"=>"Sargodha","Ali"=>"Lahore","Kashif"=>"Attock","Haider"=>"Lahore");


     //Print Assoc Array
     echo "<h1>Print Assoc Array Records</h1>";
     for($a=0;$a<count($emp);$a++){
         $name=$emp[$a];
         echo "<h3>Name=".$name."</h3>";
         echo "Salary=".$salary[$name].BR;
         echo "Age=".$age[$name].BR;
         echo "Location=".$location[$name].BR;
     }


     //Print The Assoc Array using ForEach Loop
     echo "<h1>Print The Assoc Array using For-Each Loop</h1>";
     foreach($salary as $key1=>$value){
         echo "Employee ".$key1." is getting ".$value." PKR Per Month".BR;
     }

?>