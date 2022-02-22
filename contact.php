<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">  
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

      

        * {
            
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        body{
            background:url("img/contact.jpg");
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 120%;
  font-family: 'Poppins', sans-serif;
        }
        .header-con{
     
     height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
    background-attachment: fixed;

        }



        .wrapper .button {
            display: inline-block;
            width: 60px;
            height: 60px;
            margin: 0 5px;
            overflow:hidden ;
            background: white;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 10px 10px rgba(0, 0, 0 0.1);
            transition: all 0.3s ease-out;

        }
        
        .wrapper .button:hover{
            width: 200px;

        }
        .wrapper .button .icon{
            display: inline-block;
            width: 60px;
            height: 60px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            line-height:60px ;
            transition: all 0.3s ease-out;
        }
        .wrapper .button:nth-child(1):hover .icon{
            background: #4267B2;
        }
        .wrapper .button:nth-child(2):hover .icon{
            background: #1DA1F2;
        }
        .wrapper .button:nth-child(3):hover .icon{
            background: #E1306C;
        }
        .wrapper .button:nth-child(4):hover .icon{
            background: #ff0000;
        }
        .wrapper .button .icon i{
            font-size: 25px;
            line-height: 60px;
        }
        .wrapper .button:hover .icon i{
            color: #fff;
        }
        .wrapper .button span{
            font-size: 20px;
            font-weight: 500;
            line-height: 60px;
            margin-left: 10px;
            transition: all 0.3s ease-out;

        }
        .wrapper .button:nth-child(1) span{
            color: #4267B2;
        }
        .wrapper .button:nth-child(2) span{
            color: #1DA1F2;
        }
        .wrapper .button:nth-child(3) span{
            color: #E1306C;
        }
        .wrapper .button:nth-child(4) span{
            color: #ff0000;
        }
    </style>
</head>

<body>
<header class ="header-con">
    <div class="wrapper">
        <div class="logo">
        </div>
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="indexx.php">Dragons</a></li>
<li><a href="special-sort.php">Dragon week</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>
</div>
<div class="welcome-text">
<div class="wrapper">
        <div class="button">
            <div class="icon">
                <i class="fab fa-facebook-f"> </i>
            </div>
                <span>Facebook</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-twitter"> </i>
                </div>
                    <span>Twitter</span>
                </div>
                <div class="button">
                    <div class="icon">
                        <i class="fab fa-instagram"> </i>
                    </div>
                        <span>Instagram</span>
                    </div>
                    <div class="button">
                        <div class="icon">
                            <i class="fab fa-youtube"> </i>
                        </div>
                            <span>YouTube</span>
                        </div>

    </div>

    </div>
</header>
    

</body>

</html>