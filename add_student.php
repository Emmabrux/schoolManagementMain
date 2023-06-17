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
//This condition only executes when someone clicks the 'Add Student' button

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_phone=$_POST['phone'];
    $user_email=$_POST['email'];
    $usertype="student";
    $user_password=$_POST['password'];

    //Checking for possible duplicate usernames
    // $check="SELECT * FROM user WHERE username='' ";
    // $check_user=mysqli_query($data,$check);
    // $row_count=mysqli_num_rows();

    // if($row_count==1)
    // {
    //     echo "Username Already Exist. Try Another One";
    // }
    // else
    
    $sqli="INSERT INTO user(username, phone, email,usertype,password)

     VALUES('$username','$user_phone','$user_email','$usertype','$user_password')";

    //  echo($sqli);

//This line makes sure data is inserted successfully into the database
    $result=mysqli_query($data,$sqli); 

    if($result)
    {
        echo "<script type='text/javascript'>
        
        alert('Data Uploaded Successfully');
        
        </script>";
    }
    else
    {
        echo "Upload Failed";
    }
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
    <center>
    <h1>Add Student</h1>

    <div class="div_deg">
        <form action="#" method="POST">
            <div>
                <label class="label">Username</label>
                <input type="text"name="name">
            </div>
            <div>
                <label class="label">Email</label>
                <input type="text"name="email">
            </div>
            <div>
                <label class="label">Phone</label>
                <input type="text"name="phone">
            </div>
            <div>
                <label class="label">Password</label>
                <input type="text"name="password">
            </div>
            <div>
               
                <input class="submit" type="submit"name="add_student" value="Add Student">
            </div>
        </form>
        
    </div>
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

    .label{
        display:inline-block;
        text-align:right;
        width:100px;
        padding-top:10px;
        padding-bottom:10px;
    }

    .submit{
            background-color:midnightblue;
            padding-left:10px;
            padding-right:10px;
            padding:5px;
            color:white;
        }

    .div_deg{
        background-color:skyblue;
        width:400px;
        padding-top:70px;
        padding-bottom:70px;

    }    
</style>
</body>
</html>