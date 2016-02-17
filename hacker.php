<?php
  error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
  ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>High-Entropy Password Generator</title>

        <meta name="description" content="XKCD-Inspired High-Entropy Password Generation Site">
        <meta name="author" content="David Morgan">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <?php $current='hacker'; include "header.php" ?>

    <div class="container-fluid">

        <div id="hacker">
            <h1>Hacking Attempt Detected...</h1>
	    </div>
        <br />
        <h3>Stop hacking me bro....</h3>
        <br />
        <h3>Redirecting...</h3>
        <script>
            setTimout(redirect, 500);
            function redirect()
            {
                window.location.replace()"https://www.youtube.com/watch?v=oHg5SJYRHA0");
            }
        </script>
    </div>
