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

    <body>
        <?php $current='about'; include "header.php" ?>

        <div class="container-fluid">
            <div class="row row1">
                <div class="col-md-12 vertmiddle">
                    <h1>High-Entropy Password Generator</h1>
                    <h5>An XKCD Cartoon Inspired Web Tool</h5>
                </div>
	        </div>
            <br />
            <div class="row">
                <h5>test</h5>
            </div>
        </div>
    </body>
</html>
