<html>
    <style>
        a:link {
            color: green;
        }
        
        a:visited {
            color: hotpink;
        }
        
        a:hover {
            color: red;
        }
        
        a:active {
            color: blue;
        }
        
        a:link {
            text-decoration: none;
        }
        
        .text {
            text-align: center;
            border: 3px solid red;
            background-color: rgb(215, 235, 215);
            opacity: 0.7;
            margin: 25px 350px 75px 350px;
        }
    </style>

<body style=" background-image: url(TrainPhotos/6.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div align="center" class="text">
        <?php
        session_start();
        if ($_POST["uid"] == 'admin' and $_POST["password"] == 'admin') {
            $_SESSION["admin_login"] = True;
        }

        if ($_SESSION["admin_login"] == True) {
            echo " <br><a href=\"http://localhost/railway/insert_into_stations.php\"> Show All Stations </a><br> ";
            echo " <br><a href=\"http://localhost/railway/show_trains.php\"> Show All Trains </a><br> ";
            echo " <br><a href=\"http://localhost/railway/show_users.php\"> Show All Users </a><br> ";
            echo " <br><a href=\"http://localhost/railway/insert_into_train_3.php\"> Enter New Train </a><br> ";
            echo " <br><a href=\"http://localhost/railway/insert_into_classseats_3.php\"> Enter Train Schedule </a><br> ";
            echo " <br><a href=\"http://localhost/railway/booked.php\"> View all booked tickets </a><br> ";
            echo " <br><a href=\"http://localhost/railway/cancelled.php\"> View all cancelled tickets </a><br> ";
            //echo " <br><a href=\"http://localhost/railway/logout.php\"> Logout </a><br> ";
        } else {

            echo "
    <form action=\"admin_login.php\" method=\"post\">
    <P>User ID: <input type=\"text\" name=\"uid\" required><br></p>
    <p>Password: <input type=\"password\" name=\"password\" required><br></p>
    <input type=\"submit\">
    </form>
    ";
        }


        ?>
        <br><a href="http://localhost/railway/index.htm">Go to Home Page</a>
    </div>
</body>

</html>