<html>
    <style>
        .text {
            
            border: 3px solid red;
            background-color: rgb(215, 235, 215);
            opacity: 0.7;
            

            padding: 70px 0;
            text-align: center;
            font-size: 20px;
            margin: 100px 350px 0px 350px;
        }
            a:link {
            text-decoration: none;
        }
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
        
    </style>

<body style=" background-image: url(TrainPhotos/3.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

    <?php

    session_start();
    $_SESSION = array();
    session_destroy();

    ?>
    <div align="center" class="text">
        <form action="enquiry_result.php" method="post">

            Starting Place: <select id="sp" name="sp" required>

                <?php

                require "db.php";

                $cdquery = "SELECT sname FROM station";
                $cdresult = mysqli_query($conn, $cdquery);


                echo " <option value = \"\" >
                    
                </option>";

                while ($cdrow = mysqli_fetch_array($cdresult)) {
                    $cdTitle = $cdrow['sname'];

                    echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
                }
                ?>

            </select>
            <br><br>

            Destination Place: <select id="dp" name="dp" required>

                <?php

                require "db.php";

                $cdquery = "SELECT sname FROM station";
                $cdresult = mysqli_query($conn, $cdquery);

                echo " <option value = \"\" >
                    
                </option>";

                while ($cdrow = mysqli_fetch_array($cdresult)) {
                    $cdTitle = $cdrow['sname'];

                    echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
                }
                ?>

            </select>
            <br><br>

            Date of Journey: <input type="date" name="doj" required><br>
            <p><input type="submit"></p>

        </form>
        <a href="http://localhost/railway/index.htm">Go To Home Page</a>
    </div>
</body>

</html>