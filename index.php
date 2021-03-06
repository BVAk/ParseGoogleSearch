<?php
include 'classes/MakeUrl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Main CSS-->
    <link rel="stylesheet" href="css/main.css" class="css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" class="css">
    <title>NailParser</title>
</head>

<body>
    <div class="main">
        <center class="p-2">
            <h1> Подбери ногти под настроение</h1>
        </center>
        <form action="" method="post" class="p-2">
            <div class="input-group">
                <input id="word" name="word" type="text" class="form-control" placeholder="Введите название маникюра">
                <div class="input-group-append">
                    <button class="btn btn-secondary submit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <?php

        if (isset($_POST['word'])) {
            $word = $_POST['word'];
            $url = new MakeUrl($word);
            $url1 = "https://modaphoto.ru/dizajn-nogtej/";
            $url2 = "http://www.fotoleo.com.ua/%D0%BC%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9-%D0%BC%D0%B0%D0%BD%D0%B8%D0%BA%D1%8E%D1%80/";
            $img = $url->getSiteContent($url1);
            if ($img == NULL) {
                $img2 = $url->getSiteContent($url2);
            }
        }


        ?>
    </div>

</body>

</html>