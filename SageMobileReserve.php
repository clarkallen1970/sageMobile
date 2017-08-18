<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
//require_once 'infosurvey_util_functions.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">	
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="phonegap.js"></script>
  <link rel="stylesheet" href="_css/sagesurvey.css">
  <link rel="stylesheet" href="_css/sagesurvey.jqmt.min.css">
  <link rel="stylesheet" href="_css/jquery.mobile.icons.min.css">
  <title>Sage Customer Survey Response</title>
</head>
<body>

<div data-role="page" id="homePage">
    <div data-role="header" data-position="fixed" data-fullscreen="true">
        <a href="SageBistroMobile.html" class="ui-btn ui-btn-inline ui-corner-all">Home</a>
      
	     <h2>Sage Bistro Customer Reservation</h2>
		 <br>
		<p class="response">Thank you for your Reservation.  We look forward to serving you.</p>
		<p class="response"><a href="SageBistroMobile.html">Sage Web Site</a></p>
		<p class="response"><a href="SageBistoMobile.html#bistroSurvey">Take the Survey Again</a></p>
	</div> <!-- closing content div -->

	<div data-role="footer" data-position="fixed">
		
	</div><!-- closing footer div -->
	
</div><!-- closing page div -->

</body>
</html>
