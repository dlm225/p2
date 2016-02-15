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

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

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
	  <div class="col-md-4">
      <h3> Word Count </h3>
      <br />
      <input type="range" name="rangeInput" min="3" max="9" value="4" onchange="updateTextInput(this.value);">
      <br />
      <input type="text" id="textInput" value="4">
    </div>
	  <div class="col-md-4">
      <h3> Include Number? </h3>
      <h5> (OPTIONAL) </h5>
      <form id="addnumbers">
        <input type="radio" name="number" value="none" checked> None &nbsp
        <input type="radio" name="number" value="oneBefore"> One (Before) &nbsp
        <input type="radio" name="number" value="oneAfter"> One (After) &nbsp
        <input type="radio" name="number" value="twoBoth"> Two (Both) &nbsp
      </form>
      <br />
      </div>
	  <div class="col-md-4">
      <h3> Include Special Char? </h3>
      <h5>(OPTIONAL)</h5>
      <form id="addspecchar">
        <input type="radio" name="specchar" value="none" checked> None &nbsp
        <input type="radio" name="specchar" value="oneBefore"> One (Before) &nbsp
        <input type="radio" name="specchar" value="oneAfter"> One (After) &nbsp
        <input type="radio" name="specchar" value="twoBoth"> Two (Both) &nbsp
      </form>
    </div>
  </div>

  <hr />
  <div class="row">
	  <div class="col-md-12">
      <input type="button" id="submitbutton" value="GENERATE">
      <br />
      <div id="passoutput"> <h3>[Password will update here]</h3> </div>
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
