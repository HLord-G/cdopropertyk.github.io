<?php
if(isset($_POST["submit_person"])){
  $datasave = $_POST["datasave"] ;


  
  $myfile = fopen("personal.js", "w") or die("Unable to open file!");

  $txt = "
  $datasave
  ";
  fwrite($myfile, $txt);
  
  
  fclose($myfile);
}