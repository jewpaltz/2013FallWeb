<?
	$location = 'contact';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  <body>
  	<? include('_nav.php'); ?>
  	<div class="container">
  		<div class="well">
		    <h1>Hello World</h1>
		    <p>Welcome class of 2013 to Web Server Programming <a class="btn btn-default">Learn More</a></p>
  			
  		</div>
  		<div class="row">
  			<div class="col-lg-8 col-lg-offset-2"> 
		  		<h2>Contact Us</h2>
		  		<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail1" class="col-md-2 control-label">Your Email</label>
				    <div class="col-md-10">
				      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="txtMsg" class="col-md-2 control-label">Message</label>
				    <div class="col-md-10">
				      <textarea class="form-control" id="txtMsg" placeholder="Boy do I love you guys"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-10">
				      <input type="submit" class="btn" value="Submit" />
				    </div>
				  </div>  			
		  		</form>
  			</div>
  		</div>
  		      
   	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .contact").addClass("active");
    	});
    </script>
  </body>
</html>









