<?php error_reporting(0);
if(!$_GET['page'])
{
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    
   </head>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('img3.jpg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;

   </style>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CHINA IANDMARKS</a>
      </div>
      <ul>
        <li><a href="<?php echo'www.php';?>">Home</a></li>
        <li><a href="<?php echo'www.php?page=2';?>">About</a></li>
        <li><a href="<?php echo'www.php?page=3';?>">Services</a></li>  
		<li><a href=<?php echo'www.php?page=5';?>">Feedback</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">See the most prominent landmarks of China</div>
    <div class="sub_title">Famous landmarks in china</div>
    <div class="btns">
      <button onclick="document.location='https://www.chinahighlights.com/travelguide/article-china-landmarks.htm'">Learn More</button>
      <a href="<?php echo'www.php?page=4';?>">><button >Subscribe</button></a>
    </div>
  </div>
</body>
</html>
<?php
}
elseif($_GET['page']==2)
{
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    
   </head>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
  body {background: #EBDED5;}

::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}


.center{
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;

}
.container{
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;

}

.btns button:first-child:hover{
  background: white;
  color: black;
}


   </style>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CHINA IANDMARKS</a>
      </div>
      <ul>
        <li><a href="<?php echo'www.php';?>">Home</a></li>
        <li><a href="<?php echo'www.php?page=2';?>">About</a></li>
        <li><a href="<?php echo'www.php?page=3';?>">Services</a></li>
        
        <li><a href="<?php echo'www.php?page=5';?>">Feedback</a></li>
      </ul>
    </div>
  </nav>
<div class="center">

<h1
style="text-align:center;"
	>China's Top 7 Tourist Landmarks You Should Know before Visiting the Country
 </h1>
  </div>
<div class="container">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




        <p>Every country has its landmark tourist attractions, and China is no exception.
		You should at least consider visiting all of these seven tourist landmarks: <br>
		the Great Wall on Mao Loyalty Ridge, the Forbidden City, the Terracotta Army,
		the best giant panda base, 20-Yuan Hill on the Li River, Mount Everest,<br> and Dunhuang Mogao Caves.<br>
<br>
 </p>
 <br>
        <h2 style="text-align:left"
>1. Dujiangyan Panda Base — the Best Place to See the Giant Pandas</h2>
    <br><br>
        <p style="text-align:left">A landmark in wildlife preservation. China's giant panda has become one of must-see attractions of China, alongside the Great Wall,<br> the Terracotta Army,
		and the Li River. The best places to see the giant pandas are at the Dujiangyan Panda<br>Base in Chengdu, where volunteer programs allowing 
		close contact with the giant pandas.
        The giant panda is an endangered animal. Due to deforestation and hunting (especially before the 1950s),<br> the number of giant pandas was rapidly 
        reduced. At present, this cuddly and lovable animal lives nowhere <br>else in the world except China outside captivity, with only a little more than 1,000 in the world.</p>
        <br>
		<img src="https://news.cgtn.com/news/2021-02-12/Live-A-virtual-encounter-with-giant-pandas-Ep-21-XOKGYVLydW/img/9476a2bf1c054a0ea3a1057d6ac53056/9476a2bf1c054a0ea3a1057d6ac53056.png" alt="Our Team" style="width:50%" 
>

		<h2 style="text-align:left">2. The 20 Yuan Bank Note Site — a Li River Landmark
</h2>
    <br>   <p style="text-align:left">As the fifth series of Chinese bank notes was issued, the Li River scenery printed on the back of the 20-yuan bill became a landmark of China.<br>
	   This image was taken at a site near Xingping Dock in Yangshuo. It is a part of theLi River cruise route.
	   Your cruise ship will slow down there,<br> so that you can feast your eyes on the landmark.
        Renowned for its karst landforms, limestone cones, cylinders, and hills,<br> the Li River has inspired countless Chinese poets and artists,
		and has been repeatedly depicted on the country's newspapers and magazines.</p>
        		<img src="https://www.asiaodysseytravel.com/images/china-tours/group-tours/li-river-cruise-700-1.jpg" alt="Our Team" style="width:50%" 

        <br>

        <h2 style="text-align:left">3. Mutianyu's "Mao Loyalty Ridge", the Best Place to See the Great Wall
</h2><br>
        <p style="text-align:left">he Great Wall, a star attraction in China, is a symbol of China, together with Tiananmen Square and the five stars or the Communist flag.<br>
         If you are planning to visit the Great Wall of China, the best section is at Mutianyu, a fully-restored with elegant scenery, less crowds, and good walking conditions.<br>
         The most challenging section (very steep) is near the "Mao's Loyalty Ridge", taking about 30 minutes to climb the steps.<br></p>
         <br><img src="https://incognitionblog.files.wordpress.com/2017/05/zlb77ub8spdvqdaarfg5rggx.jpeg" style="width:50%">
    </div>
 
</body>
</html>

<?php
}
elseif($_GET['page']==3)
{
?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    
   </head>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}


.center{
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;

}

.btns button:first-child:hover{
  background: white;
  color: black;
}
body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .services-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .service {
            width: 30%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 10px;
            text-align: center;
            padding: 20px;
            transition: transform 0.2s;
        }

        .service:hover {
            transform: scale(1.05);
        }

        .service-icon {
            background-color: #333;
            padding: 20px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: inline-block;
        }

        .service-icon img {
            max-width: 100%;
            height: auto;
        }

        .service h2 {
            font-size: 24px;
        }

        .service p {
            font-size: 18px;
        }

   </style>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CHINA IANDMARKS</a>
      </div>
      <ul>
        <li><a href="<?php echo'www.php';?>">Home</a></li>
        <li><a href="<?php echo'www.php?page=2';?>">About</a></li>
        <li><a href="<?php echo'www.php?page=3';?>">Services</a></li>
        <li><a href="<?php echo'www.php?page=5';?>">Feedback</a></li>
      </ul>
    </div>
  </nav>
<header>
        <h1>Our Services</h1>
    </header>

    <div class="services-container">
        <div class="service">
            <div class="service-icon">
                <img src="service1-icon.png" alt="Service 1 Icon">
            </div>
            <h2>Service 1</h2>
            <p>Ticket reservation service</p>
        </div>
        
        <div class="service">
            <div class="service-icon">
                <img src="service2-icon.png" alt="Service 2 Icon">
            </div>
            <h2>Service 2</h2>
            <p>Inquiries</p>
        </div>
        
        <div class="service">
            <div class="service-icon">
                <img src="service3-icon.png" alt="Service 3 Icon">
            </div>
            <h2>Service 3</h2>
            <p>More information</p>
        </div>
    </div>
</body>
</html>
<?php
}
elseif($_GET['page']==4)
{
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    
   </head>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
body2 {
	
     *{
      margin: 0;
      padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins',sans-serif;
     }
      ::selection{
      color: #000;
     background: #fff;
     }
     nav{
      position: fixed;
     background: #1b1b1b;
     width: 100%;
     padding: 10px 0;
     z-index: 12;
     }
      nav .menu{
     max-width: 1250px;
      margin: auto;
     display: flex;
      align-items: center;
     justify-content: space-between;
      padding: 0 20px;
      }
     .menu .logo a{
      text-decoration: none;
      color: #fff;
      font-size: 35px;
     font-weight: 600;
     }
     .menu ul{
      display: inline-flex;
      }
     .menu ul li{
      list-style: none;
      margin-left: 7px;
     }
     .menu ul li:first-child{
      margin-left: 0px;
      }
      .menu ul li a{
      text-decoration: none;
      color: #fff;
      font-size: 18px;
     font-weight: 500;
     padding: 8px 15px;
     border-radius: 5px;
      transition: all 0.3s ease;
     }
      .menu ul li a:hover{
      background: #fff;
     color: black;
     }


     .center{
     position: absolute;
      top: 30%;
     left: 50%;
     transform: translate(-50%, -50%);
     width: 100%;
     padding: 0 20px;
     text-align: center;

     }

      .btns button:first-child:hover{
      background: white;
      color: black;
      }
body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

   </style>
<body2>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CHINA IANDMARKS</a>
      </div>
      <ul>
        <li><a href="<?php echo'www.php';?>">Home</a></li>
        <li><a href="<?php echo'www.php?page=2';?>">About</a></li>
        <li><a href="<?php echo'www.php?page=3';?>">Services</a></li>
        <li><a href="<?php echo'www.php?page=5';?>">Feedback</a></li>
      </ul>
    </div></nav>
 </body2>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<body> 
<div class="container">
        <h1>Subscribe to Our page</h1>
        <form action="subscribe.php" method="post">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</body>
</html>


<?php
}
elseif($_GET['page']==5)
{
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    
   </head>
   <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
body2 {
	
     *{
      margin: 0;
      padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins',sans-serif;
     }
      ::selection{
      color: #000;
     background: #fff;
     }
     nav{
      position: fixed;
     background: #1b1b1b;
     width: 100%;
     padding: 10px 0;
     z-index: 12;
     }
      nav .menu{
     max-width: 1250px;
      margin: auto;
     display: flex;
      align-items: center;
     justify-content: space-between;
      padding: 0 20px;
      }
     .menu .logo a{
      text-decoration: none;
      color: #fff;
      font-size: 35px;
     font-weight: 600;
     }
     .menu ul{
      display: inline-flex;
      }
     .menu ul li{
      list-style: none;
      margin-left: 7px;
     }
     .menu ul li:first-child{
      margin-left: 0px;
      }
      .menu ul li a{
      text-decoration: none;
      color: #fff;
      font-size: 18px;
     font-weight: 500;
     padding: 8px 15px;
     border-radius: 5px;
      transition: all 0.3s ease;
     }
      .menu ul li a:hover{
      background: #fff;
     color: black;
     }


     .center{
     position: absolute;
      top: 30%;
     left: 50%;
     transform: translate(-50%, -50%);
     width: 100%;
     padding: 0 20px;
     text-align: center;

     }

      .btns button:first-child:hover{
      background: white;
      color: black;
      }
   body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

   </style>
<body2>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CHINA IANDMARKS</a>
      </div>
      <ul>
        <li><a href="<?php echo'www.php';?>">Home</a></li>
        <li><a href="<?php echo'www.php?page=2';?>">About</a></li>
        <li><a href="<?php echo'www.php?page=3';?>">Services</a></li>
        <li><a href="<?php echo'www.php?page=5';?>">Feedback</a></li>
      </ul>
    </div>
	</nav>
 </body2>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<body> 
<div class="container">
        <h1>Feedback Form</h1>
        <form action="submit_feedback.php" method="post">
            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" name="feedback" placeholder="Type your feedback here..." rows="4" required></textarea>

            <br>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>


<?php
}
?>

