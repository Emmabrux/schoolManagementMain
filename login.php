<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Login Form</title>
</head>
<body background="b.jpg" class="body_deg">
    <style>
      
        .form_deg{
            padding-top: 200px;
        }

        .label_deg{
            display:inline-block;
            color:skyblue;
            width:100px;
            text-align:right;
            padding-top:10px;
            padding-bottom:10px;
        }

        .submit{
            background-color:skyblue;
            padding-left:10px;
            padding-right:10px;
        }

        .login_form{
            background-color:black;
            width:400px;
            padding-top:70px;
            padding-bottom:70px;
        }

        .title_deg{
            background-color:skyblue;
            color:white;
            text-align:center;
            font-weight:bold;
            width:400px;
            padding-top:10px;
            padding-bottom:10px;
            font-size:20px;
        }

        .body_deg{
            background-attachment:fixed;
            background-size:100% 100%;
        }
    </style>
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form

                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    
                    echo $_SESSION['loginMessage'];

                    ?>
                </h4>
            </center>

            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg" for="">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_deg" for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input class="submit" type="submit" name="submit" value="login">
                </div>
            </form>

        </div>
    </center>
</body>
</html>