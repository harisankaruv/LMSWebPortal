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
                    <input type="button" value="Home" class="w3-hover-purple w3-ripple w3-button w3-bar-item w3-teal w3-right" style="width: 150px"/>
                </div>
            </form>
        </section>
        <section class="w3-card" id="content_display">
            <div class="w3-card w3-display-container">
                <img class="mySlides w3-animate-fading" src="images/slideshow_main/slide_show_1.jpg" style="width:100%; height: 100%">
                <div class="w3-display-middle w3-xxlarge w3-container w3-padding-16 w3-black">
                    Welcome to ALMS
                </div>
                <img class="mySlides w3-animate-fading" src="images/slideshow_main/slide_show_2.jpg" style="width:100%; height: 100%">
                <div class="w3-display-middle w3-xxlarge w3-container w3-padding-16 w3-black">
                    Welcome to ALMS
                </div>
                <img class="mySlides w3-animate-fading" src="images/slideshow_main/slide_show_3.jpg" style="width:100%; height: 100%">
                <div class="w3-display-middle w3-xxlarge w3-container w3-padding-16 w3-black">
                    Welcome to ALMS
                </div>
                <img class="mySlides w3-animate-fading" src="images/slideshow_main/slide_show_4.jpeg" style="width:100%; height: 100%">
                <div class="w3-display-middle w3-xxlarge w3-container w3-padding-16 w3-black">
                    Welcome to ALMS
                </div>
            </div>
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 9000);    
                }
            </script>
        </section>
        <footer class="w3-container w3-purple w3-center" alt="Library">
            <p>Copyright &copy of Group 17</p>
        </footer>
    </body>
</html>