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

$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db);

//Access to all the data in the table except admin
$sql="SELECT * FROM user WHERE usertype = 'student' ";
$result=mysqli_query($data,$sql);
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
    <center>
    <h1>Student Data</h1>
    <br><br>
    <table border="1px";>
        <tr>
            <th class="table_th">Username</th>
            <th class="table_th">Email</th>
            <th class="table_th">Phone</th>
            <th class="table_th">Password</th>
        </tr>
<!-- Showing the table data -->
        <?php
        
        while($info=$result->fetch_assoc())
        {
        
        ?>

        <tr>
            <td class="table_td">
                <?php echo "{$info['username']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['email']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['phone']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['password']}"; ?>
            </td>

        </tr>

        <?php
        }
        ?>
    </table>
    </center>
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

    .table_th{
        padding:20px;
        font-size:20px;

    }
    .table_td{
        padding:20px;
        background-color:skyblue;
    }
</style>
</body>
</html>