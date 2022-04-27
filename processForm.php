<!doctype html>	<!-- Author:	YOUR NAME 			 -->
<html lang="en"><!-- Date:	TODAY'S DATE 			 -->						
<head>		<!-- Desc:	Temporary script to process form data -->						
  <title>Thank You</title>	
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="YOUR STYLE SHEET" />
</head>
<!-- 	DIRECTIONS:
	1. Change the comments above to reflect your name and today's date
	2. Replace "YOUR STYLE SHEET" with the path/name of your style sheet.
	3. Replace the contents of the <footer> with your standard footer.
	4. Set the value of the action attribute in your form to "processForm.php"
	5. Add your navigation to match the rest of your site.
	6. DO NOT CHANGE THE CODE INSIDE THE PHP TAGS.
-->
<body>
<div id="wrapper">
<aside id="formData">
<pre>
<?php 
	print_r($_POST);
?>
</pre>
</aside>
<footer>
REPLACE THIS WITH YOUR FOOTER CONTENTS
</footer>
</div><!-- wrapper -->
</body>
</html>
