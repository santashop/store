﻿<?php

header('Content-Type: text/html; charset=utf-8');

session_start();

if (isset($_SESSION['username']))

{

    unset($_SESSION['username']);

}

?>

<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <title>

        Santa_shop

        </title>

        <link href="style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="mainLayout">



            <div class="content">

                <h3> please wait,you are logged out

                </h3>

                <script type="text/javascript">

                    setTimeout(function () {

                        window.location.href = "login.php";

                    }, 2000);

                </script>

            </div>

            <div class="footer">

                <span >  All right reserved to santa shop </span><br />

            </div>

        </div>

    </body>

</html>