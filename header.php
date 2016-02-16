
<div class="container-fluid">
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
</div>
