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

<div class="container">
    <div class="row position-login-form">
        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">

        </div>

        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">

            <form id="slick-login" action="/load_tasks" method="post">
                <p><label for="clerkname">Оберіть контролера:</label></p>
                    <select name="clerkname" class="placeholder">
                        <option>Гуцул Л.Б.</option>
                        <option>Яценко В.А.</option>
                    </select>
                <p><label for="password">Пароль:</label></p>
                    <input type="password" name="password" id="password" placeholder="Введіть Ваш пароль">
                    <p align="center"><input type="submit" id="submit" value="УВІЙТИ"></p>
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