<?php
  error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
  ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php
  if ($_POST)
  {
    $numwords = $_POST['numwords'];
    $number = $_POST['number'];
    $specchar = $_POST['specchar'];
    $specchararray = ["!","@","#","$","%","^","&","*"];

    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $filename = $DOCUMENT_ROOT.'/wordlist.txt';
    $lines_in_file = count(file($filename));
    $fp = fopen($filename, 'r');
    for ($ii = 1; $ii <= $lines_in_file; $ii++)
    {
      $line = fgets($fp);
      $wordarray[$ii] = trim($line);
    }
    fclose($fp);

    $generatedpassword = "";
    if (($number == "before") || ($number == "two"))
      $generatedpassword = $generatedpassword.rand(0,99);
    if (($specchar == "before") || ($specchar == "two"))
      $generatedpassword = $generatedpassword.$specchararray[rand(0,7)];
    for ($jj = 1; $jj <= $numwords; $jj++)
      $generatedpassword = $generatedpassword.$wordarray[rand(1,$lines_in_file)];
    if (($number == "after") || ($number == "two"))
      $generatedpassword = $generatedpassword.rand(0,99);
    if (($specchar == "after") || ($specchar == "two"))
      $generatedpassword = $generatedpassword.$specchararray[rand(0,7)];
  }
?>
