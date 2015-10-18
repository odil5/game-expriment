<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Racing</title>


    <link href="/css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-image:url(images/background/fon_1.jpg); height:190px;">

	<br/>
	<div class="text-center"><a href="#" class="btn btn-default" id="start">Start</a> <a href="#" id="reset" class="btn btn-default">Reset</a></div>
    <div class="container">

      <div class="starter-template">
    	
    	<br>
		<div>
			<span style="color:#fff">420</span>
			<div style="background-image:url(/images/way_1.jpg); background-repeat:repeat-x; height:190px;">
					<img class="car" src="/cars/bugatti.png" style="margin-top: 19px;">
			</div>
		</div>
    	

    	<br><br>
		<div>
			<span style="color:#fff">350</span>
			<div style="background-image:url(/images/way_1.jpg); background-repeat:repeat-x; height:190px;">
					<img class="car" src="/cars/ferrari.png" style="margin-top: 19px;">
			</div>
		</div>


    	<br><br>
		<div>
			<span style="color:#fff">250</span>
			<div style="background-image:url(/images/way_1.jpg); background-repeat:repeat-x; height:190px;">
					<img class="car" src="/cars/lamborjini.png" style="margin-top: 19px;">
			</div>
		</div>
				
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script>
		$(function(){
			$("#start").on("click", function(e){				
				e.preventDefault();
				$(".car").each(function(i){
					$(this).stop().animate({"margin-left":"828px"}, 4000*(i+1));
				});
			});
			
			$("#reset").on("click", function(e){
				e.preventDefault();
				$(".car").css("margin-left", "0");
			});
		});
	</script>
  </body>
</html>
