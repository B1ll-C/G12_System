<?php include('server.php');
include('ban.php');

   ?>
<!DOCTYPE html>
<html>
  <head>
    <title>registration</title>
      <link rel="stylesheet" type="text/css" href="CSS\main.css">
      <link rel="stylesheet" type="text/css" href="CSS\menu.css">
      <link rel="stylesheet" type="text/css" href="CSS\log.css">
      <link rel="stylesheet" type="text/css" href="CSS\ban.css">
    </head>
  <body>

    
      <div id="home" style="margin:50px 0 0 0 ;" class="parallax4">
          <div class="text">welcome</div>
      </div>

      <div id="about" class="parallax5">
        <h1>about</h1>
      
        <p class="">rqrwerjqfiasjdfoasjdfqwerqpw</p>   
      </div>
        
        <div id="about" class="parallax2">
      <h1 class="">menu</h1>

      <div id="type" class="tab">
          <button class="tablinks" id="defaultOpen" onclick="menus(event, 'chicken')">Chicken</button>
          <button class="tablinks" onclick="menus(event, 'pork')">Pork</button>
          <button class="tablinks" onclick="menus(event, 'fish')">Fish</button>
          <button class="tablinks" onclick="menus(event, 'soup')">Soup</button>
          <button class="tablinks" onclick="menus(event, 'beverages')">Beverages</button>
          <button class="tablinks" onclick="menus(event, 'combo')">Combo</button>
        </div>

        <div class="margin tabcontent" id="chicken">
          <img src="CSS/1.jpg" class="product">
          <br>
          <h2>1CPH paa-hita P85</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/1.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/1.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/1.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>

        <div class="margin tabcontent" id="pork">
          <img src="CSS/4.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/4.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/4.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/4.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>

        <div class="margin tabcontent" id="fish">
          <img src="CSS/3.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/3.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/3.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/3.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>

        <div class="margin tabcontent" id="soup">
          <img src="CSS/5.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/5.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/5.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/5.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>



        <div class="margin tabcontent" id="beverages">
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>

        <div class="margin tabcontent" id="combo">
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product P100</h2>
          <p>desciption of the product</p>
          <hr>
          <img src="CSS/2.jpg" class="product">
          <br>
          <h2>product p200</h2>
          <p>desciption of the product</p>
        </div>

    </div>

        <div id="contact" class="parallax3">
          <h1>contact</h1>
          <hr>
          <div class="find">
            <p>Find us at some address at some place or call us at 05050515-122330</p>
            <p ><span>FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
            <p ><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
          </div>
        </div>

     


          <!-- login/signup-->

          <div class="modal" id="login"> 
            <div class="modal-content animate ">
              <h2>login</h2>

              <form action="login.php" method="post" class="form">
                <input type="text" name="username" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit" class="logbtn" name="submit">Login</button>
               <button class="logbtn" onclick="document.getElementById('login').style.display='none'" style="float: right;">close</button>
              </form>

          
                <?php include('error.php'); ?>
    
              

            </div>
          </div>

        <div class="modal" id="signup"> 
          <div class="modal-content animate ">
            <h2>sign up</h2>
              <form method="post" action="register.php" class="form">

                  <input type="text" name="username" placeholder="username">
                  <input type="email" name="email" placeholder="email">
                  <input type="text" name="fname" placeholder="First Name" style="width: 49%;">
                  <input type="text" name="lname" placeholder="Last Name" style="width: 50%;">
                  <input type="tel" name="cont" placeholder="contact number">
                  <input type="password" name="password_1" placeholder="password" style="width: 49%;">
                  <input type="password" name="password_2" placeholder="confirm password" style="width: 50%;">
                  <button type="submit" name="reg_user" class="logbtn">register</button>
                  <button class="logbtn" onclick="document.getElementById('signup').style.display='none'" style="float: right;">close</button>
              </form>
         

              <?php include('error.php'); ?>
          </div>
        </div>
      </div>
    
    

      <ul id="heading">
        <li><a href="">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#menu">menu</a></li>
        <li><a href="#contact">contact</a></li>
        <li style="float: right;"><button class="btn" onclick="document.getElementById('login').style.display='block'">login</button></li>
        <li style="float: right;"><button class="btn" onclick="document.getElementById('signup').style.display='block'">sign up</button></li>
      </ul>

    
    
      <script type="text/javascript" src="JS\index.js"></script>
      <script type="text/javascript" src="JS\menu.js"></script>

  </body>
</html>

