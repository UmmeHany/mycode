<?php
/**
 * JavaScript (jQuery can be used):
 * Send AJAX request via POST to "ajax/json.php" and print value 'nachname' of response in element #ajax
 */

?>
<!doctype html>
<html>
<head>
	<script src="lib/jquery.min.js"></script> 
	<script>
	    $( document ).ready(function() {
	        $.ajax({
                type: 'ajax',
                method:'post',
                url: 'ajax/json.php',
                dataType: 'json',
                success: function(data){ 
               		$('#ajax').append(data.nachname);  
            }});
	    });
	</script>
 	<title>AJAX</title>
</head>
<body>
  <h1>AJAX</h1>
  <p id="ajax"></p>
</body>
</html>
