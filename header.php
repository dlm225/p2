<!--header uses bootstrap css for active tabs
uses logic on each page to store 'active' page in "$current" variable -->
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<?php if($current=='home') print("<li class='active'>");
				else print("<li>"); ?>
				<a href="index.php">Home</a>
			</li>
			<?php if($current=='what') print("<li class='active'>");
				else print("<li>"); ?>
				<a href="what.php">What is This Site?</a>
			</li>
			<?php if($current=='about') print("<li class='active'>");
				else print("<li>"); ?>
				<a href="about.php">About</a>
			</li>
		</ul>
	</div>
</div>
