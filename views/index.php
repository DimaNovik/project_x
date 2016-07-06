<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dima.Novakovskyy">

    <title>D.Novakovskyy - Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
 	<div class="container">
 		<div class="position-form">
	 		<div class="col-sm-2 col-xs-2 col-md-4">
	 		
	 		</div>
	 		
	 		<div class="col-sm-8 col-xs-8 col-md-4">
	 			<div class="login-form">
	 			<p>Тест получения данных из JSON</p>
	 				<?
	 					$jsondata = file_get_contents("tasks.json");
	 					$json = json_decode($jsondata, true);

	 					$output = "<ul>";

	 					foreach ($json['tasks'] as $task) {
	 						$output .= "<li>".$task['number']."</li>";
	 						$output .= "<li>".$task['date']."</li>";
	 						$output .= "<li>".$task['count']."</li>";
	 					}

	 					$output .= "</ul>";
	 					echo $output;
	 				?>
	 			</div>
	 		</div>
	 		
	 		<div class="col-sm-2 col-xs-2 col-md-4"></div>
	 	</div>
 	</div>
 	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
