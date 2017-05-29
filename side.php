<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<style>
		#scrollspy {
			width: 250px;
		}
	</style>
</head>

<body>

    <!-- Start your project here-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				Some initial row with some 	text <br/>	text <br/>	text <br/>	text <br/>	text <br/> 	text <br/>	
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8 red lighten-5">
				<h1 id="id1">title 1</h1>
					text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/> 	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>
				<h1 id="id2">title 2</h1>
					text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>  text <br/>	text <br/>	text  <br/>	text <br/>	text <br/>	text <br/>
				<h1 id="id3">title 3</h1>
					text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>  text <br/>	text <br/>	text <br/>  text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>	text <br/>
			</div>
			<div class="col-md-4  green lighten-5">
				<div id="scrollspy" class="sticky blue lighten-5">
					<ul class="nav nav-pills pills-primary smooth-scroll">
						<li class="nav-item"><a class="nav-link" href="#id1">title 1</a></li>
						<li class="nav-item"><a class="nav-link" href="#id2">title 2</a></li>
						<li class="nav-item"><a class="nav-link" href="#id3">a longer title</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <!-- /Start your project here-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

	<script>
		$(function () {
            $(".sticky").sticky({
                topSpacing: 20
                , zIndex: 2
            });
        });
		$('body').scrollspy({
            target: '#scrollspy'
        })
	</script>

</body>

</html>