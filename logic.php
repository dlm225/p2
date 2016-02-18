<?php
    error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
    ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php
    if ($_POST)
    {
        #pull form elements from index.php
        $numwords = $_POST['numwords'];
        $number = $_POST['number'];
        $specchar = $_POST['specchar'];
        $language = $_POST['lang'];
        $specchararray = ["!","@","#","$","%","^","&","*"];

        if (($numwords < 1) || ($numwords > 9) || (is_int($number)=="false")) {
?>
            <!-- If number of words field is tampered with, send user to hacker page -->
            <script type="text/javascript">
                window.location.href = '/hacker.php';
            </script>
<?php } ?>

<?php
    #use logic to select user defined language setting - english is default
    if($language == "english")
    {
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
    }
    else if ($language == "spanish")
    {
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $filename = $DOCUMENT_ROOT.'/spanish.txt';
        $lines_in_file = count(file($filename));
        $fp = fopen($filename, 'r');
        for ($ii = 1; $ii <= $lines_in_file; $ii++)
        {
            $line = fgets($fp);
            $wordarray[$ii] = trim($line);
        }
        fclose($fp);
    }
    else if ($language == "french")
    {
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $filename = $DOCUMENT_ROOT.'/french.txt';
        $lines_in_file = count(file($filename));
        $fp = fopen($filename, 'r');
        for ($ii = 1; $ii <= $lines_in_file; $ii++)
        {
            $line = fgets($fp);
            $wordarray[$ii] = trim($line);
        }
        fclose($fp);
    }
    else if ($language == "german")
    {
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $filename = $DOCUMENT_ROOT.'/german.txt';
        $lines_in_file = count(file($filename));
        $fp = fopen($filename, 'r');
        for ($ii = 1; $ii <= $lines_in_file; $ii++)
        {
            $line = fgets($fp);
            $wordarray[$ii] = trim($line);
        }
        fclose($fp);
    }
    else {
    ?>
        <!-- fail over to hacker page if language field is tampered with -->
        <script type="text/javascript">
            window.location.href = '/hacker.php';
        </script>
    <?php }

    #multiple if statements to generate numbers and special characters
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
