<!-- To display data from database sql(admission table) to the interface -->
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

//we are connected to the database()
$data=mysqli_connect($host,$user,$password,$db);

// Getting data from the admission table
$sql="SELECT * from admission";

// We have all the data from the admision table
$result=mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Admin Dashboard</title>
</head>
<body>

<?php

include 'admin_sidebar.php';

?>



<div class="content">
    <center>
    <h1>Applied For Admission</h1>
    <br><br>
    
 <!-- Creating a table in admission.php -->
    <table border="1px;">
        <tr>
            <th style="padding:20px; font-size:15px;">Name</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Phone</th>
            <th style="padding:20px; font-size:15px;">Message</th>
        </tr>

        <?php
        
        while($info=$result->fetch_assoc())
        {

        ?>

        <tr>
            <td style="padding:20px;">
                <?php echo "{$info['name']}"; ?></td>
            <td style="padding:20px;">
             <?php echo "{$info['email']}"; ?></td>
            <td style="padding:20px;">
             <?php echo "{$info['phone']}"; ?></td>
              
            <td style="padding:20px;">
             <?php echo "{$info['email']}"; ?></td>
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
</style>
</body>
</html>