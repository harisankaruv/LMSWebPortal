<html>
    <head>
        <title>Admin - Add Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="css/w3.css" type="text/css"/>
    </head>
    <body>
        <div class="w3-card-4 w3-center" style="width:50%; margin-top: 5%; margin-left: 25%">
            <div class="w3-container w3-brown">
                <h1 class="w3-animate-fading">Add Book</h1>
            </div>
            <br>
            <center>
                <div>
                    <form method="post">
                        <input type="text" name="bookID" class="w3-input w3-animate-input w3-hover-brown w3-center" style="width: 75%"/>
                        <label class="w3-text-brown">Book ID</label><br><br>
                        <input type="text" name="bookName" class="w3-input w3-animate-input w3-hover-brown w3-center" style="width: 75%"/>
                        <label class="w3-text-brown">Book Name</label><br><br>
                        <input type="text" name="authName" class="w3-input w3-animate-input w3-hover-brown w3-center" style="width: 75%"/>
                        <label class="w3-text-brown">Author</label><br><br>
                        <input type="text" name="bookName" class="w3-input w3-animate-input w3-hover-brown w3-center" style="width: 20%"/>
                        <label class="w3-text-brown">Total Books</label>
                        <br><br>
                        <div class="w3-bar">
                            <input type="submit" value="Confirm" class="w3-bar-item w3-button w3-brown" style="width:100px"/>
                            <input type="reset" value="Clear" class="w3-bar-item w3-button w3-black" style="width:100px"/>
                        </div>
                    </form>
                </div>
            </center>
            <br>
        </div>
    </body>
</html>
