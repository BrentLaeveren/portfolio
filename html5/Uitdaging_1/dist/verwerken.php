<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/creative.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
    <title>Verwerking Vraag</title>
</head>
<body class="container bg-primary">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>Hieronder kun je de info nalezen<h1/>
            <h2 class="text-white mt-0">Dit is de info die je ingaf:</h2>
            <ul>
            <?php
                if (isset($_POST["naam"])){
                    echo "<li class=\"text-white-50 mb-4 punt\">" . $_POST["naam"] . "</li>";
                }
            if (isset($_POST["email"])){
                echo "<li class=\"text-white-50 mb-4 punt\">" . $_POST["email"] . "</li>";
            }
            if (isset($_POST["telefoon"])){
                echo "<li class=\"text-white-50 mb-4 punt\">" . $_POST["telefoon"] . "</li>";
            }
            if (isset($_POST["vraag"])){
                echo "<li class=\"text-white-50 mb-4 punt\">" . $_POST["vraag"] . "</li>";
            }
            ?>
            </ul>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="./index.html">Terug naar homepagina</a>
        </div>
    </div>
</body>
</html>
