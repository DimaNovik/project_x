<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Контрольные обходы</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="application/views/css/bootstrap-grid-3.3.1.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="application/views/css/main.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>

<!-- container for info_card -->
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

                <div class="info_card_view">
                    <p>
                        <img src="application/views/img/users.png" />
                    </p>

                    <p align="right"><b>Доброго дня, Гуцул Л.Б.</b></p>
                    <p align="right"><b>Сьогодні:</b> <? date_default_timezone_set('Europe/Kiev'); echo date('d.m.Y'); ?></p>
                    <p align="right"><b>Кількість завдань для обробки:</b> <span class="count_tasks">4</span></p>
                </div>

            </div>
        </div>
    </div>
<!-- ./container for info_card -->


<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="list_tasks">Список завдань:<hr/></h2>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <?php


           	 					$jsondata = file_get_contents("application/json/16_06062016_tasks.json");
           	 					$json = json_decode($jsondata, true);

                      $output = "<div class='all_tasks'>";
                      $output .= "<ul>";

           	 					foreach ($json['16_06062016_tasks'] as $task) {

                        $output .= "<a href='/abonents_tasks'><div class='link_tasks'>";

           	 						$output .= "<li><b>№ завдання:</b> ".$task['number']."</li>";
           	 						$output .= "<li><b>Дата:</b> ".$task['date']."</li>";
           	 						$output .= "<li class='cyrcle_count'><span>".$task['count']."</span></li>";

                        $output .= "</div></a>";

           	 					}

                      $output .= "</ul>";
                      $output .= "</div>";

           	 					echo $output;
           	 				?>

        </div>
    </div>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="application/views/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="application/views/js/bs.js"></script>



</body>

</html>
