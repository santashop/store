﻿<?php

header('Content-Type: text/html; charset=utf-8');
session_start();

if (isset($_SESSION['username']) AND $_SESSION['username'] != '') {



    header("location:index.php");

    exit();

}

?>    

<!DOCTYPE html>



    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">



        <title>

        Santa_Shop

        </title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="mainLayout">

            <div class="header">

                <a href="login.php">Main </a>

                <a href="login.php">Login</a>

                <a href="signup.php"> Sign_up </a>

            </div>

            <div class="content">

                <form action="login.php?action=submit" method="POST">

                    <table>

                        <tr>

                            <td><label> user_name: </label></td>

                            <td><input type="text" name="username"></td>

                        </tr>

                        <tr>

                            <td><label> password : </label>

                            <td><input type="text" name="password"><br>

                        </tr>
                       
                        <tr dir="rtl" ><br>

                            <td colspan="2"><input type="submit" name="submit" value="Login"></td>

                        </tr>

                    </table>

                </form>

                <?php

                if (isset($_GET['action']) and $_GET['action'] == 'submit') {

                    if (isset($_POST['username']) and $_POST['username'] != null and isset($_POST['password']) and $_POST['password'] != null) {
					
						// إستدعاء ملف الإتصال بقاعدة البيانات
						
						require_once('database_connect.php');
						
                        $username = preg_replace('/[^a-zA-Z0-9._-]/', '', $_POST['username']);

                        $password = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['password']);

                        if (login($username, $password)) {

                            echo "<h3 style='color:#0F0;'> Well Done $username<h3>";

                            $_SESSION['username'] = $username;

                            echo "<h5 style='color:#0F0;'> please wait... <h5>";

                            echo '

                            <script type="text/javascript">

                                setTimeout(function () {

                                   window.location.href = "index.php";

                                }, 2000);

                            </script>

                            ';

                        } else {

                            echo "<h3 style='color:#000;'>Login failed,try again<h3>";

                        }

                    } else {

                        echo "<h3 style='color: #000;'>please fill all information </h3>";

                    }

                }

                ?>

            </div>

            <div class="footer">

                <span > All right reserved to santa shop</span><br />

            </div>

        </div>

    </body>

</html>







<!-- هنا أكواد الدوال -->

<?php



function login($username, $password) {

	global $conn_link;
	
	$query = "SELECT * FROM users   WHERE user_name='$username' and user_pass='$password'";
	
	if ($result = mysqli_query($conn_link,$query))
	{
		if(mysqli_num_rows($result) == '1')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

require_once('C:\xampp\htdocs\server\all-lo\login.php');
?>





