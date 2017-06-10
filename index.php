<?php include 'database.php' ; ?>

<?php
$result = mysqli_query($con, "SELECT * FROM shouts");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <title>Shout IT!</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <div id="container">
            <header>

                <h1>SHOUT IT! shoutbox</h1>
            </header>
            <div id="shouts">

                <ul>
                    <?php while($row = mysqli_fetch_array($result)){
?>
                    <li class="shout"><span><?=$row["time"]?></span> - <strong><?=$row["user"]?> : </strong><em><?=$row["message"]?></em></li>

                    <?php
}
?>
                </ul>





            </div>
            <div id="input">
            
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="message" placeholder="Enter A Message" />
                    <br>
                    <input class="btn" type="submit" name="submit" value="Shout it Out" />

                </form>
            </div>
        </div>
    </body>

    </html>
