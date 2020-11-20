<?php
  $page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
    <head>
        <title>Food Wars</title>
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/content.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/container.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="dropdown.js"></script>
    </head>
        <body>

          <div id="container">
                    <div id="header">
                        <div class="logo">
                            <div class="text">
                                <a href="index.php?page=home"><span>FOOD WARS !</span></a>
                            </div>
                        </div>
                                <div id="menu">
                                    <div class="dropdown">
                                        <button class="dropbtn" onclick="myFunction()">Menu
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                            <div class="dropdown-content" id="myDropdown">
                                                <a href="index.php?page=home">Home</a>
                                                <a href="index.php?page=about">About</a>
                                            </div>
                                        </div> 
                                    </div>
                    </div>
                                <div id="content">
                                    <?php
                                        switch($page){
                                            case 'about':
                                                require_once 'about.php';
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
                    <div id="footer"><h1>IN DEVELOPMENT</h1></div>
          </div>   

        </body>   
</html>