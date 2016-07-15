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

                <div class="info_card">
                    <p>
                        <img src="application/views/img/users.png" />
                    </p>

                    <p align="right"><b>Доброго дня, Гуцул Л.Б.</b></p>
                    <p align="right"><b>Сьогодні:</b> <? date_default_timezone_set('Europe/Kiev'); echo date('d.m.Y'); ?></p>
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
           <p align="center"><img src="application/views/img/loading.gif" class="load_gif"/></p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">

        </div>

        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">

            <form id="load_tasks" action="/tasks" method="post">
                <p align="center"><input type="submit" id="submit_load" value="Завантажити завдання"></p>
            </form>


        </div>

        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">

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
