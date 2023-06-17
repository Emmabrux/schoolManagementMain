
<!-- Connecting the database -->
<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="school";


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}


//This only executes when user clicks on the apply button. The index.php form

if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];


 //This query will insert details into the admission table

    $sql="INSERT INTO admission (name,email,phone,message)
    VALUES ('$data_name','$data_email','$data_phone','$data_message')";

 //This line makes sure data is inserted into the table
    $result = mysqli_query($data,$sql);


 //Whether apply is successful or failed    
    if($result)
    {
        $_SESSION['message']= "Your application is successful";
        header("location:index.php");
    }
    else 
    {
        echo "Apply Failed";
    }
   


}

?>