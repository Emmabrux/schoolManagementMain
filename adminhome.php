<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Admin Dashboard</title>
</head>
<body>

<!-- Connects the sidebar to adminhome -->
<?php

include 'admin_sidebar.php';

?>



<div class="content">
    <h1>Admin Dashboard</h1>
</div>
  


<style>
    *{
        margin:0px;
        padding:0px;
    }


    .header{
        background-color:skyblue;
        line-height:70px;
        padding-left:30px;
    }

    a{
        text-decoration:none;
    }

    .logout{
        float:right;
        padding-right:30px;
    }
    ul{
        background-color:#424a5b;
        width:14%;
        height:100%;
        position:fixed;
        padding-top:5%;
        text-align:center;
       
    }
    ul li{
        list-style:none;
        padding-bottom:30px;
        font-weight:15px;
        

    }

    ul li a{
        color:white;
        font-size:bold;
    } 
    
    ul li a:hover{
        color:skyblue;
        text-decoration:none;

    }
    .content{
        margin-left:20%;
        margin-top:5%;
    }
</style>
</body>
</html>