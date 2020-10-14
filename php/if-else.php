<?php
 /**
  * Org: PHPDocs.COM
  * Author: Muhammad Afzal
  * Topic: PHP IF Else-if Else 
  * Date: 14th Oct 2020
  * Link:https://phpdocs.com/php/if-else-control
  */

  //Define Data Variables
  $day=date("D");
  $EnglishMarks=69;
  $UrduMarks=32;
  $PakStuidesMarks=33;


  //Define Constants
  define("BR","<br />");

  echo $day.BR;
  $day=strtoupper($day);
  echo $day.BR;


  if($day=="WED")
    echo "Today is Wednesday".BR;


  if($EnglishMarks>=33 AND $UrduMarks>=33 AND $PakStuidesMarks>=33 ){
      echo "You are Pass.".BR;
  }
  else if($EnglishMarks>=33 AND ($UrduMarks>=33 OR $PakStuidesMarks>=33)){
      echo "You are on Prob.".BR;
  }
  else{
      echo "You are Fail.".BR;
  }
?>