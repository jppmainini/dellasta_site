<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon/icon.png">

    <title>Dellasta Informática</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick/slick/slick-theme.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="https://v2.zopim.com/?5nGwdw9tuIXZ0wD6QpIBDNIbHkfY63sj";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
</head>
<body>

<?php include_once ("menu.php")?>

<main role="main">
        <?php
        $link = $_GET["link"];

        $pag[1] = "inicio.php";
        $pag[2] = "tecsat.php";

        if(!empty($link)){
            if(file_exists($pag[$link])){
                include $pag[$link];
            }
            else{
                include "inicio.php";
            }
        }
        else{
            include "inicio.php";
        }
        ?>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/assets/js/vendor/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="bootstrap/assets/js/vendor/holder.min.js"></script>
<script src="css/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script language="JavaScript">
    //slick
    $('.slick').slick({
        centerMode: true,
        centerPadding: '185px',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    //mag enviado com sucesso
    $('#envia').click(function () {
        alert('enviar');
        var nome = $(document.getElementById("nome")).val();
        var email = $(document.getElementById("email")).val();
        var telefone = $(document.getElementById("telefone")).val();
        var msg = $(document.getElementById("mensagem")).val();

    });
</script>

</body>
</html>
