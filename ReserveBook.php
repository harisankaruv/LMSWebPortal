<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="css/w3.css" type="text/css"/>
    </head>
    <body>
        <div class="w3-card-4 w3-center" style="width:50%; margin-top: 5%; margin-left: 25%">
            <div class="w3-container w3-deep-orange">
                <h1 class="w3-animate-fading">Reserve Book</h1>
            </div>
            <br>
            <center>
                <div>
                    <form method="post">
                        <input type="text" name="memID" class="w3-input w3-animate-input w3-hover-deep-orange w3-center" style="width: 75%"/>
                        <label class="w3-text-deep-orange">Book ID</label><br><br>
                        <input type="text" name="memName" class="w3-input w3-animate-input w3-hover-deep-orange w3-center" style="width: 75%"/>
                        <label class="w3-text-deep-orange">Member ID</label><br><br>
                        <input type="date" name="memPass" class="w3-input w3-animate-input w3-hover-deep-orange w3-center" style="width: 75%"/>
                        <label class="w3-text-deep-orange">Date of Issue</label>
                        <br><br>
                        <div class="w3-bar">
                            <input type="submit" value="Reserve" class="w3-bar-item w3-button w3-deep-orange" style="width:100px"/>
                            <input type="reset" value="Clear" class="w3-bar-item w3-button w3-black" style="width:100px"/>
                        </div>
                    </form>
                </div>
            </center>
            <br>
        </div>
    </body>
</html>
