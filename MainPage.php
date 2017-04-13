<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to LMS Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="css/w3.css" type="text/css"/>
    </head>
    <body>
        <header class="w3-container w3-center w3-animate-opacity w3-purple">
            <h1>Welcome to LMS Portal</h1>
        </header>
        <section class="w3-card">
            <form method="post">
                <div class="w3-bar w3-padding-16 w3-purple" >
                    <a href="ReserveBook.php" target="content_display"><input type="button" value="Reserve Book" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-teal" style="width: 150px"/></a>
                    <input type="button" value="Issue Book" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-pink" style="width: 150px"/>
                    <input type="button" value="Search Book" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-khaki" style="width: 150px"/>
                    <input type="button" value="Cancel Reserve" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-orange" style="width: 150px"/>
                    <input type="button" value="Logout" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-blue-gray w3-right" style="width: 150px"/>
                    <input type="button" value="About" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-sand w3-right" style="width: 150px"/>
                    <input type="button" value="Update Account" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-black w3-right" style="width: 150px"/>
                    <a href="body_scroll.html" target="content_display"><input type="button" value="Home" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-teal w3-right" style="width: 150px"/></a>
                </div>
            </form>
        </section>
        <section class="w3-card">
            <iframe src="body_scroll.html" width="100%" height="750px" scrolling="no" name="content_display"></iframe>
        </section>
        <footer class="w3-container w3-purple w3-center" alt="Library">
            <p>Copyright &copy of Group 17</p>
        </footer>
    </body>
</html>