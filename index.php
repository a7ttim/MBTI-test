<?
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 04.10.2017
 * Time: 11:37
 */

spl_autoload_extensions(".php");
spl_autoload_register();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>MBTI-тест</title>

    <!-- Jquery library -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Header -->
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
<div class="wrap">


    <header class="bd-pageheader container-fluid bg-dark">

        <h2 class="text-white">MBTI-тест</h2>
        <p class="text-muted">
            Тест на профориентацию
        </p>

    </header>

    <div class="container">

        <div class="jumbotron text-center">
            <h1>
                Приветствуем!
            </h1>
            <p>
                Предлагаем пройти наш тест из 20 вопросов на определение одного из 16 типов
            </p>
            <button class="btn btn-outline-info cursor-pointer">
                Пройти тест
            </button>
        </div>

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Описание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Тест</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Типы</a>
                    </li>
                </ul>

                <hr>

                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <?
                        require_once("modules/test.php");
                        ?>
                        <?/*=round($type->getPercentage() * 100, 2)."%";*/?>
                    </div>
                </div>

            </div> <!-- /card-body -->

        </div> <!-- /card -->

    </div> <!-- /container -->
    <br>
</div> <!-- /wrap -->

    <footer class="card-footer">
        <p>&copy; Company 2017</p>
    </footer> <!-- /card-footer -->
<!-- Bootstrap core JavaScript
================================================== -->
<script src="js/bootstrap.min.js"></script>
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

