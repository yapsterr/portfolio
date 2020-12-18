<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>

<html>
    <head>
        <title>ITL303_A</title>
        <link rel="stylesheet" type="text/css" href="style/header.css">
    </head>
        <body>
            <div id="header">
                    <ul id="menu">
                        <div id="link_right">
                            <li <?php if($load == 'yap') {echo 'id="active"';} ?>> <a href="index.php?page=yap">Yap, Angelo</a></li>
                        </div>
                        <li <?php if($load == 'home') {echo 'id="active"';} ?>> <a href="index.php?page=home">Home</a></li>
                        <li <?php if($load == 'css') {echo 'id="active"';} ?>> <a href="index.php?page=css">Css</a></li>
                        <li <?php if($load == 'svg') {echo 'id="active"';} ?>> <a href="index.php?page=svg">Svg</a></li>
                        <li <?php if($load == 'canvas') {echo 'id="active"';} ?>> <a href="index.php?page=canvas">Canvas</a></li>
                    </ul>
            </div>  
            <div id="content">
                <?php
                    switch($load){
                        case 'css':
                            require_once 'css.php';
                                break;
                        case 'svg':
                            require_once 'svg.php';
                            break;
                        case 'canvas':
                            require_once 'canvas.php';
                            break;
                        case 'yap':
                            require_once 'yap.php';
                            break;
                        case 'home':
                            require_once 'home.php';
                            break;
                        default:
                            require_once ('home.php');
                            break;            
                    }
                ?>
            </div>    
        </body>
</html>