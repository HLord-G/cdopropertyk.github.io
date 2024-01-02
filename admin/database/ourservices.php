<?php
if(isset($_POST["submit_ourservice"])){
  $datasave = $_POST["datasave"] ;


  
  $myfile = fopen("ourservices.js", "w") or die("Unable to open file!");

  $txt = "
  $datasave
  ";
  fwrite($myfile, $txt);
  
  
  fclose($myfile);
}