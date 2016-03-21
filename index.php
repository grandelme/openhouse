<!DOCTYPE html>
<html>
	<head>
		<title>Open House | Food, Fellowship & Fun</title>
		
		<meta charset="UTF-8">
		<meta name="author" content="Jethro Trees">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="default.css">
		<script language="javascript" type="text/javascript" src="jquery.js"></script>		
	</head>
	
	<body>
		<div id="content">
			<div class="box">			
				<h1>Open House</h1>			
				<p>Food, Fellowship & Fun</p>
				<div class="hrt"></div>
				
				<h2 id="salutation">Welcome!</h2>								
				<form id="form_email" method="get" action="checkuser.php">
				  <p>Please enter your email address.</p>
				  <input type="text" id="email" name="email" placeholder="john.doe@gmail.com" class="lower">
				  
				  <div class="hrb"></div>
				  <input type="button" id="continue" name="continue" value="Continue">
				</form>		
			</div>
			
			<!--<div class="box">			
				<h2>Progress</h2>								
				<div class="progress-container">			
					<div class="progress-indicator"></div>
				</div>
			</div>-->
			
			<div class="box">			
				<h2>Status</h2>			
				<div class="hrt"></div>
				
				<p id="output">
					Enter your Email address to either login or register with this site.
				</p>
			</div>			
		</div>

		<script>		
		$('#continue').submit(function(){						
			$.ajax({
			  method: 'get',
			  url: 'checkuser.php',
			  data: {
				'email=' + $("#email").val()
			  },
			  success: function(data) {
				$('#output').html(data);				
			  }
			});						
		});			
		</script>
	</body>
</html>