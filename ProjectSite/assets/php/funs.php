<?php
session_start();

function HeaderEcho($Title, $css, $logo){
    $res = '
        <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
                <script src="assets/java/javaPad.js"></script>
                <link rel="stylesheet" type="text/css" href="'.$css.'">
                <link rel="shortcut icon" href="'.$logo.'">
                <title>'.$Title.'</title>
            </head>
            <body>
    ';
    echo($res);
}

function footEcho(){
    $res = '
            </body>
        </html>
    ';
    echo($res);
}

function move($page){
    echo '<script>red("'.$page.'");</script>';
}
?>