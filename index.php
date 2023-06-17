<!-- Confirms if there's a message from data_check.php -->

<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    
    alert('$message');
    </script>";
}

?>





<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <style>
            *{
                padding:0;
                margin:0;
            }
            nav{
                position: fixed;
                background-color: skyblue;
                height: 60px;
                width: 100%

            }

            .logo{
                font-size:25px;
                position: relative;
                left:5%;
                color:white;
                font-weight:bold;
                line-height:70px;
            }

            ul{
                position: relative;
                float:right;
                margin-right:20px;
            }

            ul li{
                display:inline-block;
                line-height:70px;
                margin:0 5px;
            }

            ul li a{
                text-decoration:none;
                color:white;
                font-size:17px;
            }

            .main_img{
                width:100%;
                height:750px;
            }
            .img_text{
                position: absolute;
                top:50%;
                left:20%;
                color:white;
                background-color:midnightblue;
                padding-right:20px;
                padding-left:30px;
                font-size:45px;
            }
            .img_2{
                padding-top:50px;
                height:60%;
                width:40%;
                margin-left:3%;
            }
            .header1{
                float:right;
                margin-right:27%;
                margin-top:5%;
                margin-bottom:30%;
                color:midnightblue;
                /* font-style:serif; */
            }

            .paragraph1{
              align-items:right;
            }

            .teacher{
                height:80%;
                width:90%;
                margin-left:1%;
            }
            .row{
                display:inline-flex;
                margin-left:1%;
                margin-top:2%;
            }

            .center{
                margin:1%;
            }

            .center1{
                margin-bottom:0.5%
            }

            .label_text{
                display:inline-block;
                width:100px;
                text-align:right;
                padding-right:10px;
            }

            .input_deg{
                width:30%;
                height:40px;
                border-radius:10px;
                border: 1px solid blue;
            }

            .adm_int{
                padding-top:10px;
            }

            .input_txt{
                width:30%;
                height:70px;
                border-radius:15px;
                border: 1px solid blue;
            }

            #submit{
                position: relative;
                border-radius:5px;
                width: 10%;
                left:5%;
                padding:3px;
                margin:10px;
                color:white;
                background-color:midnightblue;
            }

            footer{
                background-color:black;
                height:70px;
                width:100%;
                color:white;
            }

            .footer_txt{
                text-align:center;
                top:28%;
                position: relative;
            }

            .adm{
                padding-top:30px;
                padding-bottom:30px;
            }

          
        </style>
       
    <nav>
        <label class="logo">Brux Media-Tech</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>

    </nav>

    <div class="section1">
        <label class="img_text">Welcome To The Hub Of Technology</label>
        <img class="main_img" src="_MG_0081.jpg">

    </div>
    <div class="section2">
        <img class="img_2" src="20201006_104808.jpg">
        <div class="header1">
            <h1>Welcome to Brux Media Tech</h1>
           
        </div>
        <div class="paragraph1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos molestiae corrupti quas omnis in nobis repellat debitis nostrum distinctio, temporibus architecto mollitia eaque atque provident tempora numquam maiores cum accusantium rerum sapiente recusandae quos? Nemo doloremque esse saepe possimus corrupti autem ut. Quis rerum consequatur corrupti suscipit est necessitatibus obcaecati excepturi deleniti! Porro, sapiente eveniet, officia, eaque minima aut quo sint vel ab eum labore? Velit officiis cum molestiae a modi expedita laborum debitis nesciunt voluptates, doloribus quia at fugit aperiam neque nihil delectus, consequatur, quasi quas explicabo? Repudiandae consequatur atque nobis omnis laudantium ducimus est non at, illum incidunt quo consectetur debitis ad earum cupiditate distinctio, blanditiis ullam molestias adipisci, eaque eveniet cum libero esse iste! Nostrum mollitia ipsam reiciendis animi, voluptate quos cupiditate voluptatem molestiae enim nulla accusantium? Sapiente dolorem magnam dolorum officiis rerum autem, accusantium aliquid excepturi, impedit, velit non ipsa? Temporibus asperiores molestias facere vitae blanditiis.</p>
        </div>

    </div>

    <center class="center">
        <h1>Our Teachers</h1>
    </center>

    <div class="container3">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="t2.jpg">
            <p>Lorem ipsum dolor sit, amet consectetur
             adipisicing elit. Exercitationem aspernatur
            odit, nobis quidem recusandae sequi!</p>

            </div>
            <div class="col-md-4">
            <img class="teacher" src="r1.jpg">
            <p>Lorem ipsum dolor sit, amet consectetur
             adipisicing elit. Exercitationem aspernatur
            odit, nobis quidem recusandae sequi!</p>
                
            </div>
            <div class="col-md-4">
            <img class="teacher" src="t2.jpg">
            <p>Lorem ipsum dolor sit, amet consectetur
             adipisicing elit. Exercitationem aspernatur
            odit, nobis quidem recusandae sequi!</p>
                
            </div>
    
    

        </div>
    </div>

    <center class="center1">
        <h1>Our Courses</h1>
    </center>

    <div class="container3">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="c1.jpg">
            <h3>Web Development</h3>

            </div>
            <div class="col-md-4">
            <img class="teacher" src="c2.jpg">
            <h3>Graphic Design</h3>
                
            </div>
            <div class="col-md-4">
            <img class="teacher" src="c3.jpg">
            <h3>Digital Marketing</h3>
                
            </div>
    
    

        </div>
    </div>
    <center>
        <h1 class="adm">Admission Form</h1>
    </center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input  class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input  class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message" id="" cols="20" rows="2"></textarea>
            </div>
            <div class="adm_int">
                
                <input type="Submit" id="submit" value="Apply" name="apply">
            </div>
        </form>
    </div>

    <footer>
        <h3 class="footer_txt">All @copyright reserved by brux media tech</h3>
    </footer>

    

    </body>
</html>