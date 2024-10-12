<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open-GAW alpha | Lordgrass.com</title>
    <link rel="shortcut icon" href="../assets/favicon.png" />
    <link rel="stylesheet" type="text/css" href="global.css" />
</head>
<?php
    include "backend/dbconnect.php";
?>
<body>
    <header>
        <button onclick="showReg()">Register for beta</button>
    </header><hr>
    <h1>Open Galaxy at War</h1>
    <div id="regUsr" style="display: none;">
        <!--Form should be hidden upon load-->
        <form>
        Desired Username:
        <div><input type="text" name="username"></input></div>
        Email Address:
        <div><input type="text" name="email"></input></div>
        <!--Password:
        <div><input type="text" name="password"></input></div>-->
        <div><input type="submit"></input></div>
        </form>
    </div>
    <!--To be moved to its own file if needed-->
    <script>
        function showReg() {
            var x = document.getElementById("regUsr");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>
</html>
