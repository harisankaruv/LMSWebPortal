<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LMS Portal</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/favicon.ico"/>
  
</head>

<body>
    <?php
        $link=mysqli_connect("localhost", "root", "", "library");
        function register(){
            $mid=(int)($_POST['memid']);
            $mname=$_POST['memname'];
            $mtype=$_POST['memtype'];
            $mpass=$_POST['mempass'];
            $query="insert into membership values("+$mid+",'"+$mname+"','"+$mtype+"','"+$mpass+");";
            $s= mysqli_query($GLOBALS[$link], $query);
        }
        function checkUser(){
            $mid=(int) $_POST['logid'];
            $mps=$_POST['logpass'];
            $query="select * from membership where memid="+$mid+"and password='"+$mps+"'";
            if($query==NULL){
                window.alert("User does not exist or Invalid Login!");
            }
            else{
                
            }
        }
    ?>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up your Account</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Member ID<span class="req">*</span>
              </label>
              <input type="text" name="memid" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Member Name<span class="req">*</span>
              </label>
                <input type="text" name="memname" required autocomplete="off"/>
            </div>
          </div>
          
          <div class="field-wrap">
            <label>
              Member Type<span class="req">*</span>
            </label>
              <input list="mtype" name="memtype" required autocomplete="off"/>
              <datalist id="mtype">
                  <option value="Student"></option>
                  <option value="Staff"></option>
                  <option value="Admin"></option>
              </datalist>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
              <input type="password" name="mempass" required autocomplete="off"/>
          </div>
          
              <button type="submit" class="button button-block" onclick="register()"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Member ID<span class="req">*</span>
            </label>
                <input type="text" name="logid" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
              <input type="password" name="logpass" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
