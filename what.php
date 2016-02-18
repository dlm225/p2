<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>High-Entropy Password Generator</title>

        <meta name="description" content="XKCD-Inspired High-Entropy Password Generation Site">
        <meta name="author" content="David Morgan">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>
    <?php $current='what'; include "header.php" ?>

    <div class="container-fluid">

        <div class="row row1">
            <div class="col-md-12 vertmiddle">
                <h1>High-Entropy Password Generator</h1>
                <h5>An XKCD Cartoon Inspired Web Tool</h5>
            </div>
	    </div>
        <div class="row row1">
            <div class="col-md-6 colmd6custom">
                <h3>What is XKCD?</h3>
                <p>As described on its website - <a href="xkcd.com">xkcd.com</a> <br /> XKCD is "A webcomic of romance,
                    sarcasm, math, and language."</p>
                <p>In other words...XKCD puts into perscpective a variety of world issues using the reasoning and algorithmic
                    solution finding of an engineer.</p>
                <br />
                <div class="colmd6custom">
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">How about some math?</button>
                    <div id="demo" class="collapse">
                        <br />
                        <p>An explanation of the cartoon strip:</p>
                        <p class="simplecenter">There are four character sets:<br /> lower case letters, upper case letters, numbers, and special characters<p>
                        <p class="simpleleft">In the most basic password breaking attack, a cryptographic one-way hash algorithm is computed on a given input.
                            A simple example is the hypothetical input of <code>abc123</code> - using MD5 hashing will result in
                            <code>2c6c8ab6ba8b9c98a1939450eb4089ed</code>.  To "crack" that password, an attacker simply needs to find that hash by sequentially ("brute force")
                            or randomly ("pure luck") computing hashes.  Or, the attacker can feed dictionary words into the algorithm ("dictionary attack").</p>
                        <p class="simpleleft">Starting with a simple <code>a</code>, then <code>b</code>, then <code>c</code>, and so on, the attacker's hash computations would typically reach
                            <code>abc123</code> in less than 4min 15sec (using a modern computer with a hash capability of approximately 8.765 million hashes per second).
                            In other words, all possible combinations of lower case letters and numbers for a six-character
                            password (there are 2238976116 possible combinations) can be computed in that amount of time -- once the target hash is matched, the attacker has found the password.</p>
                        <p class="simpleleft">The argument the comic strip is making is that a user can use more difficult passwords - ones using all four
                            character sets and a much longer length - but those types of passwords are nearly impossible to memorize.  By using common words, the user can create
                            a much longer password (easily 20-30 characters), creating much higher entropy (the number of guesses - hash calculations - required to find the password hash).</p>
                        <p class="simpleleft">The only failure to this approach is the size of the dictionary from which the constituent words are pulled.  To put this into context -
                            an attacker using brute force has four character sets, the largest of which has 26 unique placeholders (the alphabet).  Using a dictionary attack, the attacker would
                            similarly methodically compute hashes - but instead of individual letters or numbers, the attacker would use words.  A four word xkcd-style password (say, 24 char in length)
                            would have much higher entropy against a brute force attack, but possibly lower entropy if a dictionary attack is used - since each word is considered a single "place" in
                            password attack algorithm.  The plausibility of cracking an xkcd-style password is directly associated with the number of words in the dictioary that is used in the
                            creation of the password - AND in the attacker's knowledge of that password.  A skilled attacker can quickly guestimate the number of words in the dictionary by using the
                            site to create a few hundred passwords and calculating the frequency of words.  However, with even a small sampling of common English words (say - 1000 or so) the entropy
                            created is much larger than even an 8 character password using the four character sets.</p>
                        <p>A great cracking website that calculates time-to-crack of different algorithms is here - <br/>
                        <a href="http://calc.opensecurityresearch.com/">http://calc.opensecurityresearch.com/</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 colmd6custom">
                <h3>Inspiration - The Cartoon Strip</h3>
                <h5>Click to see full-size: <a href="http://imgs.xkcd.com/comics/password_strength.png">
                    http://imgs.xkcd.com/comics/password_strength.png</a></h5>
                    <img id="comic" src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD comic strip explaining high entropy passwords using common words"/>
            </div>
	    </div>
    </div>
</body>

</html>
