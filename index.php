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

    <script type="text/javascript">
      function updateTextInput(val) {
        document.getElementById('textInput').value=val;
      }
    </script>

  </head>

<body>

<?php include 'header.php'; ?>

<div class="container-fluid">

  <div class="row row1">
    <div class="col-md-12 vertmiddle">
      <h1>High-Entropy Password Generator</h1>
    </div>
	</div>

	<div class="row">
    <form id="genform" class="form1" action="logic.php" method="get">
      <div class="col-md-4">
        <h3> Word Count </h3>
        <br />
        <input type="range" name="rangeInput" min="3" max="9" value="4" onchange="updateTextInput(this.value);" form="genform">
        <br />
        <input type="text" id="textInput" value="4">
      </div>
	     <div class="col-md-4">
         <h3> Include Number? </h3>
         <h5> (OPTIONAL) </h5>
         <input type="radio" name="number" value="none" checked> None &nbsp
         <input type="radio" name="number" value="before"> One (Before) &nbsp
         <input type="radio" name="number" value="after"> One (After) &nbsp
         <input type="radio" name="number" value="two"> Two (Both) &nbsp
      <br />
      </div>
	  <div class="col-md-4">
      <h3> Include Special Char? </h3>
      <h5>(OPTIONAL)</h5>
        <input type="radio" name="specchar" value="none" checked> None &nbsp
        <input type="radio" name="specchar" value="before"> One (Before) &nbsp
        <input type="radio" name="specchar" value="after"> One (After) &nbsp
        <input type="radio" name="specchar" value="two"> Two (Both) &nbsp
      </form>
    </div>
  </div>

  <hr />
  <div class="row">
	  <div class="col-md-12">
      <input type="submit" name="submitbutton" id="submitbutton" value="GENERATE" form="genform">
      <br />
      <div id="passoutput">
        <h3>[Password will update here]</h3>
      </div>
	  </div>
  </div>

</div>
<hr />
<?php include 'footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>
