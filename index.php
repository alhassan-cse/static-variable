<?php

  function my_name(){
    static $count = 0;
    $count++;
    echo $count.'<br>';
  }

  my_name();
  my_name();
  my_name();
 
?>