<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>StudentDashboard</title>
</head>
<body>

<header class="header">
    <a href="">Student Dashboard</a>

    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</header>

<aside>
    <ul>
        <li>
            <a href="">My Courses</a>
        </li>
        <li>
            <a href="">My Result</a>
        </li>
        <!-- <li>
            <a href="">View Student</a>
        </li>
        <li>
            <a href="">Add Teacher</a>
        </li>
        <li>
            <a href="">View Teacher</a>
        </li>
        <li>
            <a href="">Add Courses</a>
        </li>
        <li>
            <a href="">View Teacher</a>
        </li>
        <li>
            <a href="">View Courses</a>
        </li> -->
    </ul>
</aside>

<div class="content">
    <h1>Sidebar View</h1>

    <p>Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. Temporibus iure dolore 
        culpa molestiae numquam ipsa iusto accusamus, 
        aperiam aliquid debitis architecto a esse, 
        saepe qui porro itaque omnis eveniet laborum
         perspiciatis neque quibusdam deleniti. 
         Architecto numquam, corrupti possimus 
         dignissimos ipsum asperiores rem, maxime 
         deserunt vitae molestiae magnam aut rerum
          nihil.</p>

          <input type="text">
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