<?php
session_start();

if (isset($_GET["nextbtn"])) {
    $counter= $_SESSION['id'];
    if ($counter < 10){
   $counter = $counter+1;
   $_SESSION['id'] = $counter;
    //  header("Location: ../MVC/index.php?nextbtn=$counter");
   } else {
      $_SESSION['id']=1;
    }
  }
  
  if (isset($_GET["prebtn"])) {
    $counter= $_SESSION['id'];
    if ($counter < 2){
      $_SESSION['id']=10;
   } else {
    $counter = $counter-1;
    $_SESSION['id'] = $counter;
    //  header("Location: ../MVC/?nextbtn=$counter");
    }
  }

